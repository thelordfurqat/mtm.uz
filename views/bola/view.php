<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bola */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Bolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bola-view">

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
            'fio',
            'tugilgan_vaqti',
            'guvohnoma_raqami',
            'otasi',
            'ota_pass',
            'ota_tel',
            'onasi',
            'ona_pass',
            'ona_tel',
            'phone',
            [
                'attribute'=>'guruh_id',
                'value'=>function($x){return $x->guruh->nomi;},
            ],
            'kelgan_vaqti',
            'status',
        ],
    ]) ?>

</div>
<br>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title"> To'lovlar tarixi</h4>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= Yii::$app->urlManager->createUrl(['/tolov/create', 'bola_id' => $model->id]) ?>" class="btn btn-success pull-right">To'lovni qayd qilish</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                To'lov summasi
                            </th>
                            <th>
                                Qaysi oy uchun
                            </th>
                            <th>
                                To'langen vaqti
                            </th>
                            <th class="text-right">
                                Ko'rish
                            </th>
                            </thead>
                            <tbody>
                            <? foreach ($model->tolovs as $tolov) {?>
                                <tr>
                                    <td>
                                        <?=$tolov->tolov?> so'm
                                    </td>
                                    <td>
                                        <?=$tolov->sana?>
                                    </td>
                                    <td>
                                        <?=$tolov->vaqt?>
                                    </td>
                                    <td class="text-right">
                                        <a href="<?= Yii::$app->urlManager->createUrl(['/tolov/view', 'id' => $tolov->id]) ?>" class="btn btn-success">Ko'rish</a>
                                    </td>
                                </tr>

                            <?}?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>