<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\BolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarbiyalanuvchilar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bola-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Tarbiyalanuvchi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'fio',
            'tugilgan_vaqti',
//            'guruh_id',
            [
                'attribute'=>'guruh_id',
                'value'=>function($x){return $x->guruh->nomi;},
            ],
//            'guvohnoma_raqami',
//            'otasi',
            //'ota_pass',
            //'ota_tel',
            //'onasi',
            //'ona_pass',
            //'ona_tel',
            //'phone',
            //'kelgan_vaqti',
            'status',

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
