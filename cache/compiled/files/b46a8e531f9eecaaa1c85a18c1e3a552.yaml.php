<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-dev/user/themes/opentown/blueprints/societies.yaml',
    'modified' => 1474052350,
    'data' => [
        'title' => 'Societies',
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
                            'title' => 'Asociaciones',
                            'fields' => [
                                'header.societies' => [
                                    'name' => 'societies',
                                    'type' => 'list',
                                    'label' => 'Asociaciones',
                                    'fields' => [
                                        '.brand' => [
                                            'type' => 'text',
                                            'label' => 'Marca o denominación comercial'
                                        ],
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'Razón social'
                                        ],
                                        '.activity' => [
                                            'type' => 'text',
                                            'label' => 'Actividad'
                                        ],
                                        '.mail' => [
                                            'type' => 'text',
                                            'label' => 'Email'
                                        ],
                                        '.web' => [
                                            'type' => 'text',
                                            'label' => 'Dirección web'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Descripción'
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
