<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guruh */

$this->title = $model->nomi. ' Guruh   Tarbiyachi: ' . $model->ishchi->fio;
$this->params['breadcrumbs'][] = ['label' => 'Guruhlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="guruh-view">

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

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tarbiyalanuvchilar</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Familiya Ism Sharif
                            </th>
                            <th>
                                Tug'ilgan vaqti
                            </th>
                            <th>
                                Holat
                            </th>
                            <th class="text-right">
                                Ko'rish
                            </th>
                            </thead>
                            <tbody>
                            <? foreach ($model->bolas as $bola) {?>
                                <tr>
                                    <td>
                                        <?=$bola->fio?>
                                    </td>
                                    <td>
                                        <?=$bola->tugilgan_vaqti?>
                                    </td>
                                    <td>
                                        <?=$bola->status?>
                                    </td>
                                    <td class="text-right">
                                        <a href="<?= Yii::$app->urlManager->createUrl(['/bola/view', 'id' => $bola->id]) ?>" class="btn btn-success">Ko'rish</a>
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