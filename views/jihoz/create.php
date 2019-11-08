<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jihoz */

$this->title = 'Jihoz qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Jihozs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jihoz-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
