<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Project;

use MoonShine\Components\Boolean;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Fields\ID;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\FormPage;

class ProjectFormPage extends FormPage
{
    public function fields(): array
    {
        return [
            Block::make([
                Tabs::make([
                    Tab::make(__('moonshine::ui.resource.main_information'), [
                        ID::make()
                            ->sortable()
                            ->showOnExport(),

                        Switcher::make(__('moonshine::ui.project.activity'), 'activity')
                            ->showOnExport(),

                        Text::make(__('moonshine::ui.project.title'), 'title')
                            ->required()
                            ->showOnExport(),

                        Text::make(__('moonshine::ui.project.slug'), 'slug')
                            ->required()
                            ->showOnExport(),
                    ])
                ])
            ]),
        ];
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
