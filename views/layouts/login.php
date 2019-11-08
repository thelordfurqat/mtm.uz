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
    <link href="<?=Yii::$app->homeUrl?>theme/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="<?=Yii::$app->homeUrl?>css/css.css" rel="stylesheet">
    <!-- Icons -->
    <link href="<?=Yii::$app->homeUrl?>theme/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?=Yii::$app->homeUrl?>theme/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?=Yii::$app->homeUrl?>theme/assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body class="bg-default">
    <!--    <h1>Control.uz</h1>-->
    <?=$content?>

<?//=Yii::$app->getSecurity()->generatePasswordHash('123');?>
</body>
</html>