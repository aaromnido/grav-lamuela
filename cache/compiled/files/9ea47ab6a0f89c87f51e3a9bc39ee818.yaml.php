<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-dev/user/themes/opentown/blueprints/video-gallery.yaml',
    'modified' => 1474042083,
    'data' => [
        'title' => 'Videos Youtube',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'features' => [
                            'type' => 'tab',
                            'title' => 'Vídeos Youtube',
                            'fields' => [
                                'header.videos' => [
                                    'name' => 'videos',
                                    'type' => 'list',
                                    'label' => 'Vídeos',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Título'
                                        ],
                                        '.date' => [
                                            'type' => 'date',
                                            'label' => 'Fecha'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL del vídeo'
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
