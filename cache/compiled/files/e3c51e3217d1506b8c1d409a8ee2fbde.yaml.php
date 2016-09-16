<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-dev/user/themes/opentown/blueprints/jobs.yaml',
    'modified' => 1474045576,
    'data' => [
        'title' => 'Jobs',
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
                            'title' => 'Ofertas de empleo',
                            'fields' => [
                                'header.jobs' => [
                                    'name' => 'jobs',
                                    'type' => 'list',
                                    'label' => 'Ofertas',
                                    'fields' => [
                                        '.id' => [
                                            'type' => 'text',
                                            'label' => 'Cod. Oferta'
                                        ],
                                        '.position' => [
                                            'type' => 'text',
                                            'label' => 'Puesto'
                                        ],
                                        '.place' => [
                                            'type' => 'text',
                                            'label' => 'Lugar'
                                        ],
                                        '.type' => [
                                            'type' => 'text',
                                            'label' => 'Tipo de jornada'
                                        ],
                                        '.date' => [
                                            'type' => 'datetime',
                                            'label' => 'Fecha fín de oferta'
                                        ],
                                        '.details' => [
                                            'type' => 'textarea',
                                            'label' => 'Detalles'
                                        ],
                                        '.active' => [
                                            'type' => 'toggle',
                                            'label' => 'Puesto cubierto',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'Si',
                                                0 => 'No'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
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
