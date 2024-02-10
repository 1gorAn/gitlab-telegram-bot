<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Project;

use Illuminate\Database\Eloquent\Model;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Buttons\CreateButton;
use MoonShine\Buttons\DeleteButton;
use MoonShine\Buttons\DetailButton;
use MoonShine\Buttons\EditButton;
use MoonShine\Components\ActionGroup;
use MoonShine\Contracts\MoonShineRenderable;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Fields;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;
use MoonShine\Fields\StackFields;
use MoonShine\Fields\Switcher;
use MoonShine\Resources\ModelResource;

class ProjectIndexPage extends IndexPage
{
    public function fields(): array
    {
        return [
            StackFields::make(__('moonshine::ui.project.activity'))->fields([
                Switcher::make(__('moonshine::ui.project.activity'), 'activity'),
            ])->showOnExport(),

            StackFields::make(__('moonshine::ui.project.title_name'))->fields([
                Text::make('title'),
            ])->showOnExport(),

            StackFields::make(__('moonshine::ui.project.slug'))->fields([
                Text::make('slug'),
            ])->showOnExport(),
        ];
    }

    protected function actionButtons(): array
    {
        return [
            Grid::make([
                Column::make([
                    ActionGroup::make([
                        CreateButton::for($this->getResource()),
                        ...$this->getResource()->actions(),
                    ]),
                ]),
            ])
        ];
    }

    protected function getGroupUsersButton(ModelResource $resource)
    {
        $action = static fn ($data): string => $resource->formPageUrl($data);

        return ActionButton::make(
            __('moonshine::ui.project.employees'),
            url: $action
        )
            ->when(
                $resource->isEditInModal(),
                fn (ActionButton $button): ActionButton => $button->inModal(
                    fn (): array|string|null => __('moonshine::ui.edit'),
                    fn (): string => '',
                    async: true
                )
            )
            ->success()
            ->icon('heroicons.outline.users');
    }

    protected function itemsComponent(iterable $items, Fields $fields): MoonShineRenderable
    {
        $parentItemsComponent = parent::itemsComponent($items, $fields);

        $parentItemsComponent->buttons([
            $this->getGroupUsersButton($this->getResource()),
            DetailButton::for($this->getResource())
                ->setLabel( __('moonshine::ui.project.show_script'))
                ->icon('heroicons.outline.bolt'),
            EditButton::for($this->getResource()),
            DeleteButton::for($this->getResource()),
        ]);

        return $parentItemsComponent;
    }

    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
