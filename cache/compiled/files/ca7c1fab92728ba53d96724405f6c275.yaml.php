<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-dev/user/config/plugins/jscomments.yaml',
    'modified' => 1474582015,
    'data' => [
        'enabled' => true,
        'active' => true,
        'provider' => 'facebook',
        'providers' => [
            'disqus' => [
                'show_count' => false
            ],
            'facebook' => [
                'app_id' => '685770368239427',
                'num_posts' => 5,
                'colorscheme' => 'light',
                'order_by' => 'social',
                'language' => 'es_ES',
                'width' => '100%'
            ],
            'googleplus' => [
                'show_count' => false,
                'width' => '100%'
            ],
            'muut' => [
                'channel' => 'General',
                'widget' => false,
                'show_online' => false,
                'show_title' => false,
                'upload' => false,
                'share' => true
            ]
        ]
    ]
];
