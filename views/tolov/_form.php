<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tolov */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tolov-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bola_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Bola::find()->all(),'id','fio')) ?>

    <?= $form->field($model, 'tolov')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'sana')->textInput(['type'=>'date']) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
