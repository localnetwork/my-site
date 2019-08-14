<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/prestigelabelsco/public_html/user/config/plugins/tinymce-editor.yaml',
    'modified' => 1562136188,
    'data' => [
        'enabled' => true,
        'plugins' => [
            0 => 'advlist',
            1 => 'anchor',
            2 => 'autoresize',
            3 => 'charmap',
            4 => 'code',
            5 => 'colorpicker',
            6 => 'emoticons',
            7 => 'fullscreen',
            8 => 'hr',
            9 => 'image',
            10 => 'insertdatetime',
            11 => 'link',
            12 => 'lists',
            13 => 'media',
            14 => 'nonbreaking',
            15 => 'pagebreak',
            16 => 'paste',
            17 => 'print',
            18 => 'searchreplace',
            19 => 'table',
            20 => 'textcolor',
            21 => 'toc',
            22 => 'visualchars',
            23 => 'wordcount'
        ],
        'parameters' => [
            0 => [
                'name' => 'fontsize_formats',
                'value' => '6px 7px 8px 9px 10px 11px 12px 13px 14px 15px 16px 18px 20px 22px 24px 26px 28px 32px 36px 40px 44px 48px 54px 60px 66px 72px 80px 88px 96px'
            ],
            1 => [
                'name' => 'paste_data_images',
                'value' => '1'
            ]
        ],
        'menubar' => true,
        'menu' => [
            0 => [
                'title' => 'File',
                'items' => 'newdocument print'
            ],
            1 => [
                'title' => 'Edit',
                'items' => 'undo redo | cut copy paste pastetext | selectall | searchreplace'
            ],
            2 => [
                'title' => 'Insert',
                'items' => 'media link image | pagebreak charmap anchor hr insertdatetime nonbreaking toc'
            ],
            3 => [
                'title' => 'View',
                'items' => 'visualchars visualaid | fullscreen'
            ],
            4 => [
                'title' => 'Format',
                'items' => 'bold italic underline strikethrough superscript subscript | formats | removeformat'
            ],
            5 => [
                'title' => 'Table',
                'items' => 'inserttable tableprops deletetable | cell row column'
            ],
            6 => [
                'title' => 'Tools',
                'items' => 'code'
            ]
        ],
        'toolbar' => [
            0 => [
                'row' => 'newdocument print | cut copy paste | undo redo | searchreplace visualchars | table image media emoticons toc | insertdatetime pagebreak charmap | link unlink anchor | blockquote nonbreaking hr | code'
            ],
            1 => [
                'row' => 'formatselect | fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | indent outdent | forecolor backcolor | bullist numlist | superscript subscript | removeformat | fullscreen'
            ]
        ],
        'branding' => false,
        'statusbar' => true
    ]
];
