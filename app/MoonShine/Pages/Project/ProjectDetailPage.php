<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Project;

use MoonShine\Components\FlexibleRender;
use MoonShine\Components\Layout\Content;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Decorations\TextBlock;
use MoonShine\Fields\Code;
use MoonShine\Fields\ID;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\DetailPage;

class ProjectDetailPage extends DetailPage
{
    public function fields(): array
    {
        return [];
    }

    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    protected function mainLayer(): array
    {
        return [];
    }

    protected function bottomLayer(): array
    {
        return [
            Block::make(__('moonshine::ui.project.step.one_title'), [
                FlexibleRender::make(__('moonshine::ui.project.step.one_text')),

                Block::make([
                    Code::make('', 'script')
                        ->lineNumbers()
                        ->language('js')
                        ->fill($this->getScript())
                ])->withAttributes([
                    'style' => 'padding: .8em 0 0 0;'
                ]),
            ])->withAttributes([
                'style' => 'margin-bottom: .8em;'
            ]),

            Block::make(__('moonshine::ui.project.step.two_title'), [
                FlexibleRender::make(__('moonshine::ui.project.step.two_text')),

                Block::make([
                    Code::make('', 'script')
                        ->lineNumbers()
                        ->language('js')
                        ->fill($this->getGitLabCi())
                ])->withAttributes([
                    'style' => 'padding: .8em 0 0 0;'
                ]),
            ])->withAttributes([
                'style' => 'margin-bottom: .8em;'
            ]),


            Block::make(__('moonshine::ui.project.step.three_title'), [
                FlexibleRender::make(__('moonshine::ui.project.step.three_text'))
            ]),

            ...parent::bottomLayer()
        ];
    }

    protected function getHost(): string
    {
        $item = $this->getResource()->getItem();

        return config('app.url') . '/api/gitlab/' . $item->getAttribute('id');
    }

    protected function getScript(): string
    {
        $host = $this->getHost();

        $params = [
            'CI_PROJECT_NAME:$CI_PROJECT_NAME',
            'CI_PROJECT_URL:$CI_PROJECT_URL',
            'CI_PIPELINE_ID:$CI_PIPELINE_ID',
            'CI_COMMIT_REF_SLUG:$CI_COMMIT_REF_SLUG',
            'CI_COMMIT_MESSAGE:$CI_COMMIT_MESSAGE',
        ];

        $script = '#!/bin/bash

TIME="10"
URL="'. $host .'"
TEXT="' . implode(';', $params) . '"

curl -s --max-time $TIME -d "text=$TEXT" $URL > /dev/null
        ';

        return $script;
    }

    protected function getGitLabCi(): string
    {
        return 'stages:
  - "build"
  - "push"
  - "run"
  - "notify"

build:
  tags:
    - shop
  stage:
    build
  script:
    -  docker-compose build
    -  sh .ci-notify.sh 🚀
  only:
    - main

push:
  tags:
    - shop
  stage:
    push
  script:
    -  docker-compose push
    -  sh .ci-notify.sh ✅
  only:
    - main

run:
  tags:
    - shop
  stage:
    run
  script:
    - docker stack deploy --compose-file docker-compose.yml shop
  only:
    - main

notify_error:
  stage: notify
  script:
    - sh .ci-notify.sh ❌
  when: on_failure
';
    }
}
