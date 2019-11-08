<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="<?=Yii::$app->homeUrl?>" class="simple-text logo">
                <div class="logo-image-small">
                    <img src="<?=Yii::$app->homeUrl?>upload/logo.png">
                </div>
            </a>

        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="<?=Yii::$app->request->url==Yii::$app->homeUrl ? 'active': ''?>">
                    <a href="<?=Yii::$app->homeUrl?>">
                        <i class="nc-icon nc-bank"></i>
                        <p>Bosh sahifa</p>
                    </a>
                </li>
                <li class="<?=Yii::$app->request->url==Yii::$app->urlManager->createUrl(['/bola']) ? 'active': ''?>">
                    <a href="<?=Yii::$app->urlManager->createUrl(['/bola'])?>">
                        <i class="nc-icon nc-satisfied"></i>
                        <p>Tarbiyalanuvchilar</p>
                    </a>
                </li>
                <li class="<?=Yii::$app->request->url==Yii::$app->urlManager->createUrl(['/guruh']) ? 'active': ''?>">
                    <a href="<?=Yii::$app->urlManager->createUrl(['/guruh'])?>">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Guruhlar</p>
                    </a>
                </li>
                <li class="<?=Yii::$app->request->url==Yii::$app->urlManager->createUrl(['/tolov']) ? 'active': ''?>">
                    <a href="<?=Yii::$app->urlManager->createUrl(['/tolov'])?>">
                        <i class="nc-icon nc-money-coins"></i>
                        <p>To'lovlar</p>
                    </a>
                </li>
                <li class="<?=Yii::$app->request->url==Yii::$app->urlManager->createUrl(['/ishchi']) ? 'active': ''?>">
                    <a href="<?=Yii::$app->urlManager->createUrl(['/ishchi'])?>">
                        <i class="nc-icon nc-single-02"></i>
                        <p>Hodimlar</p>
                    </a>
                </li>
                <li class="<?=Yii::$app->request->url==Yii::$app->urlManager->createUrl(['/jihoz']) ? 'active': ''?>">
                    <a href="<?=Yii::$app->urlManager->createUrl(['/jihoz'])?>">
                        <i class="nc-icon nc-laptop"></i>
                        <p>Jihozlar</p>
                    </a>
                </li>
                <li class="<?=Yii::$app->request->url==Yii::$app->urlManager->createUrl(['/user']) ? 'active': ''?>">
                    <a href="<?=Yii::$app->urlManager->createUrl(['/user'])?>">
                        <i class="nc-icon nc-circle-10"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="<?=Yii::$app->homeUrl?>">Bosh sahifa</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form action="<?=Yii::$app->urlManager->createUrl(['/site/search'])?>" method="get">
                        <div class="input-group no-border">
                            <input type="text" value="" name="search" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="<?=Yii::$app->homeUrl?>">
                                <i class="nc-icon nc-layout-11"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Bosh sahifa</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="<?=Yii::$app->urlManager->createUrl(['/user/view','id'=>Yii::$app->user->id])?>">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
           <?=$content?>
        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li>
                                <a>Axmedjanov Muxammad</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, Toshkent Atxborot Texnologiyalari Universiteti Urganch Fililali
              </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
