<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foydalanuvchilar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Foydalanuvchi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'image',
                'value'=>function($d){
                    return "<object data='/web/upload/{$d->image}' type='image/png' style='width: 100px'><img src='/web/upload/avatar.jpg' style='width:100px;'></object>";

                },
                'filter'=>false,
                'format'=>'raw'
            ],
            'fio',
            [
                'attribute'=>'username',
                'headerOptions' => ['style' => 'width:25%'],
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Amallar',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a(Yii::t('app', '<span class="fa fa-eye" style="width: 18px">Ko\'rish</span>'), ['view', 'id' => $model->id], [
                                'class' => 'btn btn-success',
                                'style'=>'width:125px'
                            ]).'<br>';
                    },

                    'update' => function ($url, $model) {
                        return Html::a(Yii::t('app', '<span class="fa fa-edit" style="width: 18px"> Taxrirlash </span>'), ['update', 'id' => $model->id], [
                                'class' => 'btn btn-primary',
                                'style'=>'width:125px'
                            ]).'<br>';
                    },
                    'delete' => function ($url, $model) {
                        return Html::a(Yii::t('app', '<span class="fa fa-trash" style="width: 18px">O\'chirish</span>'), ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'style'=>'width:125px',
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]);
                    }

                ],
            ],
        ],
    ]); ?>
</div>
