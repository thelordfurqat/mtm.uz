<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ishchi */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Ishchis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ishchi-view">

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
            'fio',
            'lavozim',
            'tel',
            'passport',
        ],
    ]) ?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title"> Xodimga biriktirilgan jihozlar</h4>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= Yii::$app->urlManager->createUrl(['/jihoz/create', 'ishchi_id' => $model->id]) ?>" class="btn btn-success pull-right">Jihoz biriktirish</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Jihoz nomi
                            </th>
                            <th>
                                soni
                            </th>
                            <th class="text-right">
                                Ko'rish
                            </th>
                            </thead>
                            <tbody>
                            <? foreach ($model->jihozs as $jihoz) {?>
                                <tr>
                                    <td>
                                        <?=$jihoz->nomi?>
                                    </td>
                                    <td>
                                        <?=$jihoz->cnt?>
                                    </td>
                                    <td class="text-right">
                                        <a href="<?= Yii::$app->urlManager->createUrl(['/jihoz/view', 'id' => $jihoz->id]) ?>" class="btn btn-success">Ko'rish</a>
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
