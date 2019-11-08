<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jihoz */

$this->title = $model->nomi;
$this->params['breadcrumbs'][] = ['label' => 'Jihozs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jihoz-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'nomi',
            [
                    'attribute'=>'ishchi_id',
                'value'=>function($x){return $x->ishchi->fio;},
            ],
            'cnt',
        ],
    ]) ?>

</div>
