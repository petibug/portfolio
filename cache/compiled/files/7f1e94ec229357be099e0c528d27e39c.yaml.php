<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/WEB-DEV/Test/grav-admin/user/themes/bb-theme/blueprints.yaml',
    'modified' => 1546597873,
    'data' => [
        'name' => 'Bb Theme',
        'version' => '0.1.0',
        'description' => 'Test Theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'BB',
            'email' => 'bruno.buglio@gmail.com'
        ],
        'homepage' => 'https://github.com/bb/grav-theme-bb-theme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/bb/grav-theme-bb-theme/issues',
        'readme' => 'https://github.com/bb/grav-theme-bb-theme/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
