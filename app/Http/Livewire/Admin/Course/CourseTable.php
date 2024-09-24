<?php

namespace App\Http\Livewire\Admin\Course;

use App\Models\Admin\Course;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class CourseTable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Course::query()->orderBy('position'); // Eager load anything; // Select some things
    }

    public array $bulkActions = [
        'bulkDelete' => 'Bulk Delete',
        'toggleActive' => 'Toggle Active',
    ];

    public function bulkDelete()
    {
        Course::whereIn('id', $this->getSelected())->delete();
    }

    public function toggleActive()
    {
        Course::whereIn('id', $this->getSelected())->each(function ($course) {
            $course->update(['active' => ! $course->active]);
        });
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setEagerLoadAllRelationsEnabled();

        $this->setEmptyMessage('No Course found');

        $this->setReorderStatus(true);

        $this->setDefaultReorderSort('position', 'asc');
    }

    public function reorder($items): void
    {
        foreach ($items as $item) {
            Course::find((int) $item['value'])->update(['position' => (int) $item['order']]);
        }
    }

    public function columns(): array
    {
        return [
            Column::make('Flag')
                ->label(
                    fn ($row, Column $column) => '<img src="'.$row->thumbnail.'"  width="60" alt="'.$row->name.'">'
                )
                ->html()
                ->collapseOnTablet(),
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            BooleanColumn::make('Active'),
            Column::make('Action')
                ->label(
                    fn ($row, Column $column) => Blade::render('<x-adminetic-action :model="$model" route="course" :show="0" />', ['model' => $row])
                )
                ->html()
                ->collapseOnTablet(),
        ];
    }
}
