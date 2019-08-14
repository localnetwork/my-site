<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/user/plugins/admin-media-actions/blueprints.yaml',
    'modified' => 1561629876,
    'data' => [
        'name' => 'Admin Media Actions',
        'version' => '1.0.4',
        'description' => 'A plugin that extends Grav with an API for adding actions to media items in the page media bin.  This plugin is required by other plugins that add media actions.',
        'icon' => 'plug',
        'author' => [
            'name' => 'TwelveTone LLC',
            'email' => 'info@twelvetone.tv'
        ],
        'homepage' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-admin-media-actions-plugin',
        'keywords' => 'grav, plugin, admin, media, action',
        'bugs' => 'https://github.com/Flamenco/grav-admin-media-actions/issues',
        'docs' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-admin-media-actions-plugin',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.0.0'
            ],
            1 => [
                'name' => 'admin',
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
                ],
                'show_samples' => [
                    'type' => 'toggle',
                    'label' => 'Show sample actions',
                    'description' => 'For testing purposes, several actions will be added to each media item.',
                    'highlight' => 0,
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
