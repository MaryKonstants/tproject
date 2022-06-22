<?php

use yii\console\controllers\MigrateController;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => \yii\console\controllers\FixtureController::class,
            'namespace' => 'common\fixtures',
            'globalFixtures' => [
                'uraankhayayaal\page\tests\fixtures\PageBlockChart',
                'uraankhayayaal\page\tests\fixtures\PageBlock',
                'ityakutia\gallery\tests\fixtures\GalleryPhoto',
                'ityakutia\banner\tests\fixtures\Banner',
                'ityakutia\blog\tests\fixtures\ArticleCategorySet',
//                'uraankhayayaal\page\tests\fixtures\PageMenuItem'
            ],
          ],
        'faker' => [
            'class' => \ityakutia\materialadmin\commands\FakerController::class,
        ],
        'migrate' => [
            'class' => MigrateController::class,
            'migrationPath' => [
                'console/migrations',
                '@yii/rbac/migrations',
                '@ityakutia/materialadmin/migrations',
                '@vendor/uraankhayayaal/yii2-page/src/migrations',
                '@vendor/it-yakutia/yii2-banner/src/migrations',
                '@vendor/it-yakutia/yii2-blog/src/migrations',
                '@vendor/it-yakutia/yii2-gallery/src/migrations',
                '@vendor/it-yakutia/yii2-navigation/src/migrations'
            ],
        ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
];
