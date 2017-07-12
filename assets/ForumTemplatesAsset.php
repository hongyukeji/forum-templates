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
        'css/font-awesome.min.css',
        'css/bootstrap5152.css?ver=1.0',
        'css/responsive5152.css?ver=1.0',
        'css/main5152.css?ver=1.0',
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}