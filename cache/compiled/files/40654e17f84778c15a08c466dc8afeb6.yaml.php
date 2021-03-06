<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/system/blueprints/pages/features.yaml',
    'modified' => 1562668040,
    'data' => [
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'unset@' => true,
                            'type' => 'ignore'
                        ],
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.media_order' => [
                                    'unset@' => true,
                                    'type' => 'ignore'
                                ],
                                'content' => [
                                    'unset@' => true,
                                    'type' => 'ignore'
                                ],
                                'header.features.fieldset' => [
                                    'type' => 'fieldset',
                                    'icon' => 'question-circle',
                                    'collapsible' => true,
                                    'title' => 'Features',
                                    'fields' => [
                                        'header.features' => [
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'fields' => [
                                                '.title' => [
                                                    'name' => 'Feature Title',
                                                    'style' => 'vertical',
                                                    'label' => 'Title',
                                                    'type' => 'text',
                                                    'validate' => [
                                                        'required' => true
                                                    ]
                                                ],
                                                '.image' => [
                                                    'style' => 'vertical',
                                                    'name' => 'image',
                                                    'label' => 'Image',
                                                    'type' => 'file',
                                                    'multiple' => false,
                                                    'destination' => 'self@',
                                                    'accept' => [
                                                        0 => 'image/*'
                                                    ]
                                                ],
                                                '.pdf' => [
                                                    'style' => 'vertical',
                                                    'name' => 'pdf',
                                                    'label' => 'PDF File',
                                                    'type' => 'file',
                                                    'multiple' => false,
                                                    'destination' => 'self@',
                                                    'accept' => [
                                                        0 => '.pdf'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
