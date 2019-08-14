<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/user/plugins/cdn/blueprints.yaml',
    'modified' => 1561630043,
    'data' => [
        'name' => 'CDN',
        'version' => '1.5.0',
        'description' => 'Provides CDN support for Grav by rewriting URLs to take advantage of CDN Pull Zones',
        'icon' => 'cloud-upload',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-cdn',
        'demo' => 'http://getgrav.org',
        'keywords' => 'cdn, plugin, performance, speed',
        'bugs' => 'https://github.com/getgrav/grav-plugin-cdn/issues',
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
                ],
                'forcehttps' => [
                    'type' => 'toggle',
                    'label' => 'Force HTTPS',
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
                'pullzone' => [
                    'type' => 'text',
                    'label' => 'CDN Domain',
                    'default' => 'yourdomain.cdn.com',
                    'placeholder' => 'yourdomain.cdn.com',
                    'help' => 'The domain hosting your CDN distribution eg. cdn.getgrav.org'
                ],
                'tags' => [
                    'type' => 'text',
                    'label' => 'Tags',
                    'default' => 'a|link|img|script',
                    'placeholder' => 'a|link|img|script',
                    'help' => 'HTML tags to search and replace with CDN url'
                ],
                'tag_attributes' => [
                    'type' => 'text',
                    'label' => 'Tag Attributes',
                    'default' => 'href|src',
                    'placeholder' => 'href|src',
                    'help' => 'HTML tag attributes to search'
                ],
                'inline_css_replace' => [
                    'type' => 'toggle',
                    'label' => 'Inline CSS Replace',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Replace inline css attribute references'
                ],
                'extensions' => [
                    'type' => 'text',
                    'label' => 'Extensions',
                    'default' => 'jpe?g|png|gif|ico|ttf|otf|svg|woff|xml|js|css',
                    'placeholder' => 'jpe?g|png|gif|ico|ttf|otf|svg|woff|xml|js|css',
                    'help' => 'File extensions to replace on'
                ],
                'valid_formats' => [
                    'type' => 'text',
                    'label' => 'Valid Formats',
                    'default' => 'html',
                    'placeholder' => 'html',
                    'help' => 'Page type to search/replace within'
                ]
            ]
        ]
    ]
];
