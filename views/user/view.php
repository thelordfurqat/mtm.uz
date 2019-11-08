<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

<div class="row">
    <div class="col-lg-6">
        <h3><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="col-lg-6">
        <?php
        echo Html::beginForm(['/site/logout'], 'post');
        echo Html::submitButton(
            '<i class="ni ni-user-run"></i>
                            <span>Chiqish</span>',
            ['class' => 'btn btn-danger pull-right']
        );
        echo Html::endForm();

        ?>
    </div>
</div>
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
                'attribute'=>'image',
                'value'=>function($d){
                    return "<object data='/web/upload/{$d->image}' type='image/png' style='width: 100px'><img src='/web/upload/avatar.jpg' style='width:100px;'></object>";

                },
                'filter'=>false,
                'format'=>'raw'
            ],
            'fio',
            'username',
            'password',
            'authKey',
        ],
    ]) ?>

</div>
