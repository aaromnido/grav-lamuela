<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-dev/user/themes/opentown/blueprints/bandos.yaml',
    'modified' => 1473863058,
    'data' => [
        'title' => 'Bandos',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'documentos' => [
                            'type' => 'tab',
                            'title' => 'Bandos',
                            'fields' => [
                                'header.documentos' => [
                                    'name' => 'documentos',
                                    'type' => 'list',
                                    'label' => 'Bandos',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Título',
                                            'validate' => [
                                                'required' => true,
                                                'type' => 'text'
                                            ]
                                        ],
                                        '.date' => [
                                            'type' => 'date',
                                            'label' => 'Fecha',
                                            'validate' => [
                                                'required' => true,
                                                'type' => 'date'
                                            ]
                                        ],
                                        '.file' => [
                                            'type' => 'file',
                                            'label' => 'Documento',
                                            'destination' => 'user/pages/06.el-ayuntamiento/03.bandos/documentos',
                                            'multiple' => false,
                                            'filesize' => 5,
                                            'avoid_overwriting' => true,
                                            'limit' => 1,
                                            'accept' => [
                                                0 => '.pdf',
                                                1 => '.png',
                                                2 => '.jpg',
                                                3 => '.jpeg'
                                            ],
                                            'validate' => [
                                                'type' => 'file'
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
