<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Project;

use MoonShine\Components\Boolean;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;
use MoonShine\Fields\StackFields;
use MoonShine\Fields\Switcher;

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

            StackFields::make(__('moonshine::ui.project.title_name'))->fields([
                Text::make('slug'),
            ])->showOnExport(),
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
