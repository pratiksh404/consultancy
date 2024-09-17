<?php

namespace App\Http\Livewire\Admin\Step;

use App\Models\Admin\Step;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class StepTable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Step::query()->orderBy('position'); // Eager load anything; // Select some things
    }

    public array $bulkActions = [
        'bulkDelete' => 'Bulk Delete',
    ];

    public function bulkDelete()
    {
        Step::whereIn('id', $this->getSelected())->delete();
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
            SelectFilter::make('Featured')
                ->options([
                    '' => 'All',
                    '1' => 'Featured',
                    '0' => 'Not Featured',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('featured', true);
                    } elseif ($value === '0') {
                        $builder->where('featured', false);
                    }
                }),
        ];
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setEagerLoadAllRelationsEnabled();

        $this->setEmptyMessage('No Step found');

        $this->setReorderStatus(true);

        $this->setDefaultReorderSort('position', 'asc');
    }

    public function reorder($items): void
    {
        foreach ($items as $item) {
            Step::find((int) $item['value'])->update(['position' => (int) $item['order']]);
        }
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Excerpt', 'excerpt'),
            Column::make('Action')
                ->label(
                    fn ($row, Column $column) => Blade::render('<x-adminetic-action :model="$model" route="step" :show="0" />', ['model' => $row])
                )
                ->html()
                ->collapseOnTablet(),
        ];
    }
}
