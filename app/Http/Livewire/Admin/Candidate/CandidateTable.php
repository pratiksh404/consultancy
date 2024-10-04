<?php

namespace App\Http\Livewire\Admin\Candidate;

use App\Models\Admin\Candidate;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class CandidateTable extends DataTableComponent
{
    public $test;

    protected $listeners = ['candidateAdded' => '$refresh'];

    public function mount($test = null)
    {
        $this->test = $test;
    }

    public function builder(): Builder
    {
        $query = Candidate::query()
            ->with('country', 'course', 'visa'); // Eager load anything; // Select some things

        return ! is_null($this->test) ? $query->whereIn('id', $this->test->candidates->pluck('id')->toArray())->latest() : $query->latest();
    }

    public array $bulkActions = [
        'bulkDelete' => 'Bulk Delete',
        'verify' => 'Verify Candidate',
        'unverify' => 'Revoke Verification',
        'present' => 'Mark as Present',
        'absent' => 'Mark as Absent',
    ];

    public function bulkDelete()
    {
        Candidate::whereIn('id', $this->getSelected())->delete();
        $this->emit('candidateUpdated');
    }

    public function verify()
    {
        Candidate::whereIn('id', $this->getSelected())->update(['verified' => true]);
        $this->emit('candidateUpdated');
    }

    public function unverify()
    {
        Candidate::whereIn('id', $this->getSelected())->update(['verified' => false]);
        $this->emit('candidateUpdated');
    }

    public function present()
    {
        Candidate::whereIn('id', $this->getSelected())->get()->each(function ($candidate) {
            $candidate->attend();
        });
        $this->emit('candidateUpdated');
    }

    public function absent()
    {
        Candidate::whereIn('id', $this->getSelected())->update(['attended' => false]);
        $this->emit('candidateUpdated');
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Verified')
                ->options([
                    '' => 'All',
                    '1' => 'Verified',
                    '0' => 'Not Verified',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('verified', $value);
                }),

            SelectFilter::make('Attendance')
                ->options([
                    '' => 'All',
                    '1' => 'Present',
                    '0' => 'Absent',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('attended', $value);
                }),
        ];
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setEagerLoadAllRelationsEnabled();

        $this->setEmptyMessage('No Candidate found');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable(),
            Column::make('Code', 'code')
                ->searchable(),
            BooleanColumn::make('Verified'),
            BooleanColumn::make('Attended'),
            Column::make('Name')
                ->label(fn ($row) => Candidate::find($row->id)->name ?? '-')
                ->sortable()
                ->searchable(),
            Column::make('Email', 'email')
                ->searchable()
                ->format(
                    fn ($value, $row, Column $column) => '<a href="mailto:'.$row->email.'">'.$row->email.'</a>'
                )
                ->html()
                ->collapseOnTablet(),
            Column::make('Phone', 'phone')
                ->searchable()
                ->format(
                    fn ($value, $row, Column $column) => '<a href="tel:'.$row->phone.'">'.$row->phone.'</a>'
                )
                ->html()
                ->collapseOnTablet(),
            Column::make('Address', 'address')
                ->sortable()
                ->searchable(),
            Column::make('Country', 'country_id')
                ->format(
                    fn ($value, $row, Column $column) => $row->country->name ?? '-'
                )
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Visa', 'visa_id')
                ->format(
                    fn ($value, $row, Column $column) => $row->visa->name ?? '-'
                )
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Course', 'course_id')
                ->format(
                    fn ($value, $row, Column $column) => $row->course->name ?? '-'
                )
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
        ];
    }
}
