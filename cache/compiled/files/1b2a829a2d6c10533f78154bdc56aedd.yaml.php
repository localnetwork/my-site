<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/user/config/plugins/form.yaml',
    'modified' => 1562158089,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'inline_css' => true,
        'refresh_prevention' => false,
        'client_side_validation' => true,
        'inline_errors' => false,
        'files' => [
            'multiple' => true,
            'limit' => 10,
            'destination' => 'self@',
            'avoid_overwriting' => false,
            'random_name' => true,
            'filesize' => 0,
            'accept' => [
                0 => 'image/*'
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'light',
            'site_key' => '6Lf6PKUUAAAAAHaU3bSx-3j8fOsz77lNB8gxNOTO',
            'secret_key' => '6Lf6PKUUAAAAAFohW50jzkCxPX2UBcEEVSODT3Gn'
        ]
    ]
];
