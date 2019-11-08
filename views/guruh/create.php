<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guruh */

$this->title = 'Guruh qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Guruhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guruh-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
