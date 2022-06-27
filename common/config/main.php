<?php
return [
    'language' => 'ru-RU',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'urlManagerFrontend' => [
            'class' => 'yii\web\UrlManager',
        ],
        'i18n' => [ // компонент мультизязычности
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages', // ВАЖНО! этот путь к папке с переводами
                    'sourceLanguage' => 'en-US', // базовым языком путь будет инглиш
                    'fileMap' => [
                        'app' => 'app.php', // группа фраз и её файл-источник
                        'app/error' => 'error.php', // для ошибок (тоже какое-то подмножетсво переводимых фраз)
                    ],
                ],
            ],
        ],
    ],
    'modules' => [
//        'materialadmin' => [
//            'class' => 'ityakutia\materialadmin\Module',
//            'page_front' => [
//                'view' => '@frontend/views/front_page/view',
//            ],
//        ],
        'page' => [
            'class' => 'uraankhayayaal\page\Module',
        ],
        'banner' => [
            'class' => 'ityakutia\banner\Module',
        ],
        'blog' => [
            'class' => 'ityakutia\blog\Module',
        ],
        'navigation' => [
            'class' => 'ityakutia\navigation\Module',
        ],
    ],
];
