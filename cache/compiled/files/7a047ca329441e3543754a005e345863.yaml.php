<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/user/plugins/admin-media-move/blueprints.yaml',
    'modified' => 1561629878,
    'data' => [
        'name' => 'Admin Media Move',
        'version' => '1.0.4',
        'description' => 'Moves media from one page to another.',
        'icon' => 'plug',
        'author' => [
            'name' => 'TwelveTone LLC',
            'email' => 'info@twelvetone.tv'
        ],
        'homepage' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-admin-media-move-plugin',
        'keywords' => 'grav, plugin, admin, media',
        'bugs' => 'https://github.com/Flamenco/grav-admin-media-move',
        'docs' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-admin-media-move-plugin',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.0.0'
            ],
            1 => [
                'name' => 'admin',
                'version' => '>=1.0.0'
            ],
            2 => [
                'name' => 'admin-media-actions',
                'version' => '>=1.0.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
