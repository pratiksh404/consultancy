<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\Admin\Country;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CountryTable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Country::query()->orderBy('position'); // Eager load anything; // Select some things
    }

    public array $bulkActions = [
        'bulkDelete' => 'Bulk Delete',
        'toggleActive' => 'Toggle Active',
    ];

    public function bulkDelete()
    {
        Country::whereIn('id', $this->getSelected())->delete();
    }

    public function toggleActive()
    {
        Country::whereIn('id', $this->getSelected())->each(function ($country) {
            $country->update(['active' => ! $country->active]);
        });
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setEagerLoadAllRelationsEnabled();

        $this->setEmptyMessage('No Country found');

        $this->setReorderStatus(true);

        $this->setDefaultReorderSort('position', 'asc');
    }

    public function reorder($items): void
    {
        foreach ($items as $item) {
            Country::find((int) $item['value'])->update(['position' => (int) $item['order']]);
        }
    }

    public function columns(): array
    {
        return [
            Column::make('Flag')
                ->label(
                    fn ($row, Column $column) => '<img src="'.$row->flag.'"  width="60" alt="'.$row->name.'">'
                )
                ->html()
                ->collapseOnTablet(),
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Action')
                ->label(
                    fn ($row, Column $column) => Blade::render('<x-adminetic-action :model="$model" route="country" :show="0" />', ['model' => $row])
                )
                ->html()
                ->collapseOnTablet(),
        ];
    }
}
