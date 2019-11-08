<?php
/**
 * Created by PhpStorm.
 * User: Lord
 * Date: 16.06.2019
 * Time: 10:13
 */
?>
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
                                Guruh
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
                            <? foreach ($model as $bola) {?>
                                <tr>
                                    <td>
                                        <?=$bola->fio?>
                                    </td>
                                    <td>
                                        <?=$bola->guruh->nomi?>
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
