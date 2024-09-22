<?php

namespace App\Http\Livewire\Admin\Team;

use App\Models\Admin\Team;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TeamTable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Team::query()->orderBy('position'); // Eager load anything; // Select some things
    }

    public array $bulkActions = [
        'bulkDelete' => 'Bulk Delete',
    ];

    public function bulkDelete()
    {
        Team::whereIn('id', $this->getSelected())->delete();
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setEagerLoadAllRelationsEnabled();

        $this->setEmptyMessage('No Team found');

        $this->setReorderStatus(true);

        $this->setDefaultReorderSort('position', 'asc');
    }

    public function reorder($items): void
    {
        foreach ($items as $item) {
            Team::find((int) $item['value'])->update(['position' => (int) $item['order']]);
        }
    }

    public function columns(): array
    {
        return [
            Column::make('Profile')
                ->label(
                    fn ($row, Column $column) => '<img src="'.$row->image.'"  width="60" alt="'.$row->name.'">'
                )
                ->html()
                ->collapseOnTablet(),
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Designation', 'designation')
                ->sortable()
                ->searchable(),
            Column::make('Social Media')
                ->label(
                    fn ($row, Column $column) => count($row->data['social_medias'] ?? []) > 0 ? collect($row->data['social_medias'])->reduce(fn ($html, $social_media) => $html.'<i class="mx-2 '.$social_media.'"></i>') : ''
                )
                ->html()
                ->collapseOnTablet(),
            Column::make('Action')
                ->label(
                    fn ($row, Column $column) => Blade::render('<x-adminetic-action :model="$model" route="team" :show="0" />', ['model' => $row])
                )
                ->html()
                ->collapseOnTablet(),
        ];
    }
}
