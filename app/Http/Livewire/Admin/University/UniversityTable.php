<?php

namespace App\Http\Livewire\Admin\University;

use App\Models\Admin\University;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class UniversityTable extends DataTableComponent
{
    public function builder(): Builder
    {
        return University::query()->with('country')->orderBy('position'); // Eager load anything; // Select some things
    }

    public array $bulkActions = [
        'bulkDelete' => 'Bulk Delete',
        'toggleActive' => 'Toggle Active',
    ];

    public function bulkDelete()
    {
        University::whereIn('id', $this->getSelected())->delete();
    }

    public function toggleActive()
    {
        University::whereIn('id', $this->getSelected())->each(function ($university) {
            $university->update(['active' => ! $university->active]);
        });
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Active')
                ->options([
                    '' => 'All',
                    '1' => 'Active',
                    '0' => 'Inactive',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('active', true);
                    } elseif ($value === '0') {
                        $builder->where('active', false);
                    }
                }),
        ];
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setEagerLoadAllRelationsEnabled();

        $this->setEmptyMessage('No University found');

        $this->setReorderStatus(true);

        $this->setDefaultReorderSort('position', 'asc');
    }

    public function reorder($items): void
    {
        foreach ($items as $item) {
            University::find((int) $item['value'])->update(['position' => (int) $item['order']]);
        }
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Name', 'name')
                ->format(
                    fn ($value, $row, Column $column) => '<a href="'.($row->url ?? '#').'" target="_blank" class="text-decoration-none text-'.($row->getRawOriginal('active') ? 'success' : 'danger').'">'.$value.'</a>'
                )
                ->html()
                ->sortable()
                ->searchable(),
            Column::make('Country', 'country_id')
                ->format(
                    fn ($value, $row, Column $column) => $row->country->name ?? '-'
                )
                ->sortable()
                ->searchable(),
            Column::make('Active', 'active')
                ->format(
                    fn ($value, $row, Column $column) => '<span class="badge badge-'.($row->getRawOriginal('active') ? 'success' : 'danger').' ">'.($row->getRawOriginal('active') ? 'Active' : 'Inactive').'</span>'
                )
                ->html()
                ->collapseOnTablet(),
            Column::make('Action')
                ->label(
                    fn ($row, Column $column) => Blade::render('<x-adminetic-action :model="$model" route="university" :show="0" />', ['model' => $row])
                )
                ->html()
                ->collapseOnTablet(),
        ];
    }
}
