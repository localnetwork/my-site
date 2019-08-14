<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://admin-media-move/admin-media-move.yaml',
    'modified' => 1561629878,
    'data' => [
        'enabled' => true,
        'modal_move' => [
            'fields' => [
                0 => [
                    'type' => 'section',
                    'title' => 'Move Media'
                ],
                1 => [
                    'type' => 'text',
                    'label' => 'Filename',
                    'name' => 'file_name',
                    'readonly' => true
                ],
                2 => [
                    'type' => 'pages',
                    'label' => 'Destination Page',
                    'name' => 'destination_page'
                ],
                3 => [
                    'type' => 'text',
                    'label' => 'Destination Route',
                    'name' => 'destination_route',
                    'autofocus' => 'on'
                ]
            ]
        ]
    ]
];
