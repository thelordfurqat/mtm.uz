<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <label for="add-pic" class="add-pic-label" style="max-height: 200px">
        Rasm <br>
        <img id="blah" style="max-height: 200px" src="<?= Yii::$app->homeUrl?>upload/<?=$model->image ? $model->image : 'icon-camera.png'?>" alt="your image" class="add-image"/>
        <?= $form->field($model, 'image')->fileInput(['onchange'=>'readURL(this)','id'=>'add-pic','accept'=>'image/*'])->label('',['style'=>'display:none']) ?>
        <!--        <input type='file' onchange="readURL(this);" id="add-pic" accept="image/*"/>-->
    </label>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <!--    --><?//= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>