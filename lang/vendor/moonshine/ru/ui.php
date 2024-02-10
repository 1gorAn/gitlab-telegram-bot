<?php

return [
    'profile' => 'Профиль',
    'dashboard' => 'Панель',
    'add' => 'Добавить',
    'create' => 'Создать',
    'edit' => 'Редактировать',
    'show' => 'Просмотр',
    'save' => 'Сохранить',
    'saved' => 'Сохранено',
    'saved_error' => 'Произошла ошибка',
    'filters' => 'Фильтры',
    'search' => 'Поиск',
    'reset' => 'Сбросить',
    'total' => 'Всего',
    'deleted' => 'Удалено',
    'delete' => 'Удалить',
    'deleting' => 'Удаление',
    'download' => 'Скачать',
    'export' => 'Экспорт',
    'import' => 'Импорт',
    'cancel' => 'Отмена',
    'confirm' => 'Подтвердить',
    'close' => 'Закрыть',
    'confirm_message' => 'Вы уверены, что хотите удалить запись?',
    'back' => 'Вернуться назад',
    'more' => 'Перейти',
    'all_sections' => 'Все разделы',
    'file' => 'Файл',
    'loading' => 'Загрузка ...',
    'notfound' => 'Пока записей нет',
    'collapse_menu' => 'Свернуть меню',
    '404' => 'Хьюстон! У нас проблема - страница не найдена',
    'copied' => 'Скопировано!',
    'notifications' => [
        'title' => 'Уведомления',
        'mark_as_read_all' => 'Все прочитано',
        'mark_as_read' => 'Прочитано',
    ],
    'login' => [
        'title' => 'Добро пожаловать в :moonshine_title!',
        'description' => 'Пожалуйста, войдите в свою учетную запись',
        'authorization' => 'Авторизация',
        'remember_me' => 'Запомнить',
        'login' => 'Войти',
        'logout' => 'Выйти',
        'username' => 'Логин',
        'email' => 'E-mail',
        'password' => 'Пароль',
        'or_socials' => 'или',
    ],
    'resource' => [
        'system' => 'Система',
        'role' => 'Роли',
        'name' => 'Имя',
        'email' => 'E-mail',
        'password' => 'Пароль',
        'repeat_password' => 'Повторите пароль',
        'avatar' => 'Аватар',
        'created_at' => 'Дата создания',
        'admins_title' => 'Администраторы',
        'role_title' => 'Роли',
        'role_name' => 'Название',

        'main_information' => 'Основная информация',
        'change_password' => 'Изменить пароль',

        'link_socialite' => 'Привязать аккаунты',
        'linked_socialite' => 'Привязанные аккаунты',

        'queued' => 'Поставлен в очередь',

        'export' => [
            'exported' => 'Экспортирован',
        ],

        'import' => [
            'imported' => 'Импортирован',
            'file_required' => 'Файл обязателен',
            'extension_not_supported' => 'Расширение файла не поддерживается'
        ]
    ],
    'project' => [
        'title' => 'Проекты',
        'slug' => 'Код проекта',
        'title_name' => 'Название проекта',
        'activity' => 'Активность',
        'script' => 'Активность',

        'step' => [
            'one_title' => 'Шаг 1',
            'one_text' => 'Для начала вам необходимо создать в проекте файл с именем .ci-notify.sh.',

            'two_title' => 'Шаг 2',
            'two_text' => 'Теперь скопируйте данный код и поместите его в файл, созданный на первом шаге.',

            'three_title' => 'Шаг 3',
            'three_text' => ' В файле .gitlab-ci.yml найдите нужную стадию и добавьте раздел script, если его нет. Затем в разделе script добавьте строку "sh .ci-notify.sh" в конце строки и передайте аргумент.',

            'four_title' => 'Шаг 4',
            'four_text' => 'На последнем этапе просто отправьте изменения в репозиторий, и вам придет уведомление.',
        ]
    ]
];
