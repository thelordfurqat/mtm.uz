<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\BolaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bola-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'tugilgan_vaqti') ?>

    <?= $form->field($model, 'guvohnoma_raqami') ?>

    <?= $form->field($model, 'otasi') ?>

    <?php // echo $form->field($model, 'ota_pass') ?>

    <?php // echo $form->field($model, 'ota_tel') ?>

    <?php // echo $form->field($model, 'onasi') ?>

    <?php // echo $form->field($model, 'ona_pass') ?>

    <?php // echo $form->field($model, 'ona_tel') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'guruh_id') ?>

    <?php // echo $form->field($model, 'kelgan_vaqti') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
