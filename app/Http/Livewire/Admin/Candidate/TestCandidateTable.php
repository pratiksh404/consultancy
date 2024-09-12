<?php

namespace App\Http\Livewire\Admin\Candidate;

use App\Models\Admin\Candidate;
use App\Models\Admin\Test;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class TestCandidateTable extends DataTableComponent
{
    public $test;

    public function mount(Test $test)
    {
        $this->test = $test;
    }

    public function builder(): Builder
    {
        return Candidate::whereIn('id', $this->test->candidates->pluck('id')->toArray())
            ->with('country', 'course', 'visa')->latest(); // Eager load anything; // Select some things
    }

    public array $bulkActions = [
        'bulkDelete' => 'Bulk Delete',
        'verify' => 'Verify Candidate',
        'unverify' => 'Revoke Verification',
    ];

    public function bulkDelete()
    {
        Candidate::whereIn('id', $this->getSelected())->delete();
    }

    public function verify()
    {
        Candidate::whereIn('id', $this->getSelected())->update(['verified' => true]);
    }

    public function unverify()
    {
        Candidate::whereIn('id', $this->getSelected())->update(['verified' => false]);
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
        ];
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setEagerLoadAllRelationsEnabled();

        $this->setEmptyMessage('No Candidate found');

        $this->setRefreshTime(2000);
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable(),
            Column::make('Code', 'code')
                ->searchable(),
            BooleanColumn::make('Verified'),
            Column::make('Name', 'name')
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
