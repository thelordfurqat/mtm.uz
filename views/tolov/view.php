<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tolov */

$this->title = $model->bola->fio;
$this->params['breadcrumbs'][] = ['label' => 'Tolovs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tolov-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Taxrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
        [
                'attribute'=>'bola_id',
            'value'=>function($x){return $x->bola->fio;},
        ],
            'tolov',
            'sana',
            'vaqt',
        ],
    ]) ?>

</div>
