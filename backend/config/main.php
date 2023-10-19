<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'language' => 'uz',
    'modules' => [
            'backend' => [
                'class' => 'backend\modules\test\Module',
            ],
        'gridview' => [
            'class' => 'kartik\grid\Module',
        ],
        'profile-manager' => [
            'class' => 'backend\modules\profilemanager\Module'
        ],
    ],
    'components' => [

        'assetManager' => [
            'bundles' => [
                'yii2mod\alert\AlertAsset' => [
                    'css' => [
                        'dist/sweetalert.css',
                        'themes/twitter/twitter.css',
                    ]
                ],
            ],
        ],
         'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@backend/views'
             ],
         ],
    ],
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '/admincrm',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'authTimeout' => 600,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            'class' => 'yii\web\Session',
            'cookieParams' => ['httponly' => true, 'lifetime' => 3600 * 4],
            'timeout' => 3600*4, //session expire
            'useCookies' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
             'baseUrl' => '/admincrm',
            'rules' => [
            ],
        ],
        
    ],
    'params' => $params,
];
