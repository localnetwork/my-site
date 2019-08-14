<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/user/plugins/minify-html/languages/en.yaml',
    'modified' => 1562067642,
    'data' => [
        'PLUGIN_MINIFYHTML' => [
            'CACHE' => [
                'LABEL' => 'Minify HTML cache',
                'HELP' => 'You will need to manually clear the cache if you make any page modifications'
            ],
            'MODE' => [
                'LABEL' => 'Compression Mode',
                'HELP' => 'Choose a compression mode (default compress JS and CSS but doesn\'t do it aggressively to get the smallest size.Fastest only compresses HTML and ignores the rest. Smallest compress everything aggressively to get the smallest size.)',
                'OPTION' => [
                    'DEFAULT' => 'default',
                    'FASTEST' => 'fastest',
                    'SMALLEST' => 'smallest'
                ]
            ]
        ]
    ]
];
