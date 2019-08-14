<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/user/plugins/resmush/blueprints.yaml',
    'modified' => 1561720430,
    'data' => [
        'name' => 'Resmush',
        'version' => '1.0.0',
        'description' => 'Image Optimizer',
        'icon' => 'cloud-upload',
        'author' => [
            'name' => 'Team Halcyon',
            'email' => 'diome.halcyonwebdesign@gmail.com'
        ],
        'keywords' => 'image optimizer, plugin, performance, speed',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'highlight' => 1,
                    'default' => 1,
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
