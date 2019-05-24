<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => md5('password'),
        'loginSecurityLevel' => 'normal',
            ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'client8',
                'driver' => 'mysqli',
                'host' => 'client8-mysql',
                'password' => 'dev',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'dev',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:0:"";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            't3am' => 'a:4:{s:6:"server";s:14:"http://server/";s:5:"token";s:40:"f99c03a407da8eb841ef1aec428e21b8facfee62";s:12:"avatarFolder";s:10:"1:/avatar/";s:10:"selfSigned";s:1:"1";}',
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        't3am' => [
            'avatarFolder' => '1:/avatar/',
            'selfSigned' => '1',
            'server' => 'http://server/',
            'token' => 'f99c03a407da8eb841ef1aec428e21b8facfee62',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => ' -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '52b030e57d93165edb70e2f7cb9e4bd7ba3f20fe937c17e99464b8be3fc0daec54f4e721cd2429ad646fea47c772626b',
        'exceptionalErrors' => 4096,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'T3AM Client',
        'systemLogLevel' => 2,
        'systemMaintainers' => [
            1,
        ],
    ],
];
