<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bola */

$this->title = 'Tarbiyalanuvchi qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Bolalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bola-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
