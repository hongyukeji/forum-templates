<?php

namespace hongyukeji\templates;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 * use hongyukeji\templates\ForumTemplatesAsset;
 * ForumTemplatesAsset::register($this);
 * $baseUrl = $this->assetBundles[ForumTemplatesAsset::className()]->baseUrl;
 */
class ForumTemplatesAsset extends AssetBundle
{
    public $sourcePath = '@vendor/hongyukeji/forum-templates/static/';
    public $css = [
        'css/bootstrap5152.css?ver=1.0',
        'css/responsive5152.css?ver=1.0',
        'css/main5152.css?ver=1.0',
        'css/font-awesome.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery-1.8.3.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}