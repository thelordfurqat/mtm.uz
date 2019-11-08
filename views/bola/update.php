<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bola */

$this->title = 'Taxrirlash: ' . $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Bolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bola-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
