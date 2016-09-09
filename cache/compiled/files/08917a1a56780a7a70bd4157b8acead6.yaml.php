<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-dev/user/themes/opentown/blueprints/inicio.yaml',
    'modified' => 1473446565,
    'data' => [
        'title' => 'Destacados',
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
                            'title' => 'Destacados',
                            'fields' => [
                                'header.featured_video' => [
                                    'name' => 'video destacado',
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
