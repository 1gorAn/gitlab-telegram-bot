<?php

namespace App\MoonShine\Pages\Project;

use App\Models\Project;
use MoonShine\Buttons\CreateButton;
use MoonShine\Components\ActionGroup;
use MoonShine\Contracts\MoonShineRenderable;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Fields;
use MoonShine\Pages\Crud\IndexPage;

class ProjectEmployeesPage extends IndexPage
{
    protected Project $project;

    public function __construct(?string $itemId = null, ?string $alias = null, ?ResourceContract $resource = null)
    {
        $this->project = Project::findOrFail($itemId);

        $title = __('moonshine::ui.project.project') . ' - ' . $this->project->title;

        parent::__construct($title, $alias, $resource);
    }

    protected function itemsComponent(iterable $items, Fields $fields): MoonShineRenderable
    {
        $items = $this->project->employees;

        dd($items);
        return parent::itemsComponent($items, $fields);
    }

    protected function actionButtons(): array
    {
        return [
            Grid::make([
                Column::make([
                    ActionGroup::make([
                        CreateButton::for($this->getResource()),
                    ]),
                ]),
            ])
        ];
    }
}
