<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ishchi */

$this->title = 'Taxrirlash: ' . $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Ishchis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ishchi-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
