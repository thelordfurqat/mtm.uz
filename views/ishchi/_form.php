<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ishchi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ishchi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lavozim')->dropDownList(['Tarbiyachi'=>'Tarbiyachi','Hamshira'=>'Hamshira','Oshpaz'=>'Oshpaz','Mudir'=>'Mudir','Xo\'jalik ishlari bo\'yicha mudir o\'rinbosari'=>'Xo\'jalik ishlari bo\'yicha mudir o\'rinbosari','Xisobchi'=>'Xisobchi','Farrosh'=>'Farrosh','Qoravul'=>'Qoravul' ]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
