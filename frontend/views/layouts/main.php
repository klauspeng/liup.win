<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="l-header" class="l-header" style="background-image:url(http://otfiq2zfh.bkt.clouddn.com/bg.jpg)">
    <div class="hdbg"></div>
    <div class="hdbg2"></div>
    <div class="m-about">
        <div id="logo">
            <a href="/"><img src="http://www.liup.win/usr/themes/GreenGrapes/img/head.jpg" alt=""></a>
        </div>
        <h1 class="tit"><a href="/">刘鹏--博客</a></h1>
        <div class="about">Be vigilant in peace time!</div>
    </div>
    <div id="header-canvas" style="width: 100%;height: 100%"></div>
</header>

<div id="m-nav" class="m-nav">
    <div class="m-nav-all">
        <div class="m-logo-url">
            <img src="http://www.liup.win/usr/themes/GreenGrapes/img/head.jpg">
            <h3>pthlp</h3>
        </div>
        <ul class="nav">
            <li  class="active">
                <a href="http://www.liup.win/">首页</a>
            </li>
            <li >
                <a href="http://www.liup.win/start-page.html" title="关于我">关于我</a>
            </li>
        </ul>
    </div>
</div>

<div class="wrap">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
