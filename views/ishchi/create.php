<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ishchi */

$this->title = 'Xodim qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Ishchis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ishchi-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
