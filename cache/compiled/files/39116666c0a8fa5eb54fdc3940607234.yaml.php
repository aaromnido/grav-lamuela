<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-dev/user/config/plugins/email.yaml',
    'modified' => 1488381220,
    'data' => [
        'enabled' => true,
        'from' => 'aaromnido@gmail.com',
        'from_name' => 'Fernando Val',
        'to' => 'aaromnido@gmail.com',
        'to_name' => 'aaromnido@gmail.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'aaromnido@gmail.com',
                'password' => 'Aaromnido6969'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
