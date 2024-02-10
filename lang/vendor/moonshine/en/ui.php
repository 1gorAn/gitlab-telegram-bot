<?php

return [
    'profile' => 'Profile',
    'dashboard' => 'Dashboard',
    'add' => 'Add',
    'create' => 'Create',
    'edit' => 'Edit',
    'show' => 'Show',
    'save' => 'Save',
    'saved' => 'Saved',
    'saved_error' => 'Error',
    'filters' => 'Filters',
    'search' => 'Search',
    'reset' => 'Reset',
    'total' => 'Total',
    'deleted' => 'Deleted',
    'delete' => 'Delete',
    'deleting' => 'Deleting',
    'download' => 'Download',
    'export' => 'Export',
    'import' => 'Import',
    'cancel' => 'Cancel',
    'confirm' => 'Confirm',
    'close' => 'Close',
    'confirm_message' => 'Are you sure?',
    'back' => 'Back',
    'more' => 'More',
    'all_sections' => 'All sections',
    'file' => 'File',
    'loading' => 'Loading ...',
    'notfound' => 'Records not found',
    'collapse_menu' => 'Collapse menu',
    '404' => 'Houston we have a problem page not found',
    'copied' => 'Copied!',
    'notifications' => [
        'title' => 'Notifications',
        'mark_as_read_all' => 'Mark all as read',
        'mark_as_read' => 'Mark as read',
    ],
    'login' => [
        'title' => 'Welcome to :moonshine_title!',
        'description' => 'Please sign-in to your account',
        'authorization' => 'Authorization',
        'remember_me' => 'Remember me',
        'login' => 'Log in',
        'logout' => 'Log out',
        'username' => 'Username',
        'email' => 'E-mail',
        'password' => 'Password',
        'or_socials' => 'or',
    ],
    'resource' => [
        'system' => 'System',
        'role' => 'Roles',
        'name' => 'Name',
        'email' => 'E-mail',
        'password' => 'Password',
        'repeat_password' => 'Repeat password',
        'avatar' => 'Avatar',
        'created_at' => 'Created At',
        'admins_title' => 'Admins',
        'role_title' => 'Roles',
        'role_name' => 'Title',

        'main_information' => 'Main information',
        'change_password' => 'Change password',

        'link_socialite' => 'Link account',
        'linked_socialite' => 'Account linked',

        'queued' => 'Queued',

        'export' => [
            'exported' => 'File exported',
        ],

        'import' => [
            'imported' => 'Imported',
            'file_required' => 'File is required',
            'extension_not_supported' => 'File extension not supported'
        ]
    ],
    'project' => [
        'title' => 'Project',
        'slug' => 'Code project',
        'title_name' => 'Project name',
        'activity' => 'Activity',
        'script' => 'Activity',

        'step' => [
            'one_title' => 'Step 1',
            'one_text' => 'To begin, create a file named .ci-notify.sh in your project and copy the provided code into it.',

            'two_title' => 'Step 2',
            'two_text' => 'In the .gitlab-ci.yml file, locate the desired stage and add a script section if it doesn\'t exist. Then, within the script section, add the line "sh .ci-notify.sh" at the end of the line and pass the argument.',

            'three_title' => 'Step 3',
            'three_text' => 'At the final step, simply push the changes to the repository, and you will receive a notification.',

        ]
    ]
];
