<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/user/themes/sub/blueprints.yaml',
    'modified' => 1562573144,
    'data' => [
        'name' => 'Simple',
        'version' => '1.0.0',
        'description' => 'A bootstrap starter kit when starting a web project from scratch.',
        'author' => [
            'name' => 'Team Halcyon Web Design PH',
            'email' => 'diome.halcyonwebdesign@gmail.com',
            'url' => 'https://halcyonwebdesign.com.ph'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'loadCSS' => [
                    'type' => 'toggle',
                    'label' => 'LoadCSS',
                    'description' => 'By enabling this option, you\'ll need to enable the page loader as this will use LOADCSS method in loading css files. <a href="https://github.com/filamentgroup/loadCSS/" target="_blank">more info</a>',
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'preloader' => [
                    'type' => 'toggle',
                    'label' => 'Page Loader',
                    'description' => 'When enabled, will use the default preloader.',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'logo' => [
                    'type' => 'file',
                    'label' => 'Logo',
                    'destination' => 'theme://logos',
                    'multiple' => false,
                    'markdown' => true,
                    'description' => 'Will be used instead of default logo `theme://logo.png`',
                    'random_name' => true,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'favicon' => [
                    'type' => 'file',
                    'label' => 'Favicon',
                    'destination' => 'theme://favicon',
                    'multiple' => false,
                    'random_name' => true,
                    'accept' => [
                        0 => '.png',
                        1 => '.ico'
                    ]
                ],
                'header.toTop' => [
                    'type' => 'fieldset',
                    'title' => 'Back to Top',
                    'icon' => 'chevron-circle-up',
                    'collapsible' => true,
                    'fields' => [
                        'header.toTop.arrowStatus' => [
                            'type' => 'toggle',
                            'default' => 0,
                            'highlight' => 1,
                            'style' => 'vertical',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ]
                        ],
                        'header.toTop.color' => [
                            'type' => 'colorpicker',
                            'style' => 'vertical',
                            'label' => 'Back to top Color'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
