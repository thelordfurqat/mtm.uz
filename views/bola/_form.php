<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bola */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bola-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tugilgan_vaqti')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'guvohnoma_raqami')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ota_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ota_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'onasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ona_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ona_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guruh_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Guruh::find()->all(),'id','nomi')) ?>

    <?= $form->field($model, 'kelgan_vaqti')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'status')->dropDownList(['Qabul qilingan'=>'Qabul qilingan','Qarzdor'=>'Qarzdor','Navbatga qo\'yilgan'=>'Navbatga qo\'yilgan','Qabul qilinmagan'=>'Qabul qilinmagan','Ketgan'=>'Ketgan']) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
