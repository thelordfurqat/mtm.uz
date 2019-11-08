<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tolov */

$this->title = 'To\'lov qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Tolovs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tolov-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
