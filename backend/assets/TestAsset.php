<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Test asset bundle.
 */
class TestAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site_test.css',
    ];
}