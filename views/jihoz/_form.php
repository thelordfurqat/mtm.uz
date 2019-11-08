<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jihoz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jihoz-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ishchi_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Ishchi::find()->all(),'id','fio')) ?>

    <?= $form->field($model, 'cnt')->textInput(['type'=>'number']) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
