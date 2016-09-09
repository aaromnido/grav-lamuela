<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-dev/user/themes/opentown/blueprints/features.yaml',
    'modified' => 1473428394,
    'data' => [
        'title' => 'Features',
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
                            'title' => 'Features',
                            'fields' => [
                                'header.features' => [
                                    'name' => 'features',
                                    'type' => 'list',
                                    'label' => 'Features',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.subtitle' => [
                                            'type' => 'text',
                                            'label' => 'Subtitle'
                                        ],
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon'
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
