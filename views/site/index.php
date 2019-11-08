<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= Yii::$app->urlManager->createUrl(['/bola']) ?>">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-satisfied text-warning"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Bolalar</p>
                            <p class="card-title"><?=sizeof(\app\models\Bola::find()->all())?>ta
                            <p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i> Tarbiyalanuvchilar soni
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= Yii::$app->urlManager->createUrl(['/guruh']) ?>">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-tile-56 text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Guruhlar</p>
                            <p class="card-title"><?=sizeof(\app\models\Guruh::find()->all())?>ta
                            <p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-calendar-o"></i> MTMdagi guruhlar
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= Yii::$app->urlManager->createUrl(['/ishchi']) ?>">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Xodimlar</p>
                            <p class="card-title"><?=sizeof(\app\models\Ishchi::find()->all())?>ta
                            <p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-clock-o"></i> Barcha Xodimlar soni
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= Yii::$app->urlManager->createUrl(['/jihoz']) ?>">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-laptop text-primary"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Jihozlar</p>
                            <p class="card-title"><?=sizeof(\app\models\Jihoz::find()->all())?>ta
                            <p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i> Barcha jihozlar soni
                </div>
            </div>
        </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">Shavkat Mirziyoyev</h5>
                <p class="card-category">O'zbekiston Respublikasi Prezidenti</p>
            </div>
            <div class="card-body ">
                <img src="<?= Yii::$app->homeUrl?>upload/two.jpg">
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-history"></i>Biz uchun birinchi o‘rinda bolalarimizning ma’naviyati, bilimi, sog‘ligi. Shuning uchun davlat tomonidan maktabgacha ta’limga katta e’tibor berilyapti va bu hali boshlanishi. Sizlarning vazifangiz bolalarning ko‘zidagi nurni ilg‘ab olish, ularga yaxshi tarbiya berish
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">Sifatli ta'lim</h5>
                <p class="card-category">3 yoshdan 7 yoshgacha bo'lgan bolalar</p>
            </div>
            <div class="card-body ">
                <img src="<?= Yii::$app->homeUrl?>upload/three.jpg">
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-calendar"></i>3 yoshdan 7 yoshgacha bo'lgan bolalarni uzliksiz ta'lim, yaxshi tarbiya hamda sifatli shart sharoitlarda ulg'ayishini taminlash
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-title">Qulay sharoit</h5>
                <p class="card-category">Farzandlarimizni qulay shart-sharoitlarda ulg'ayishadi</p>
            </div>
            <div class="card-body">
                    <img src="<?= Yii::$app->homeUrl?>upload/one.jpg">
            </div>
            <div class="card-footer">
                <hr/>
                <div class="card-stats">
                    <i class="fa fa-check"></i> Tarbiyalanuvchilarga qulay shart sharoitda ta`lim olish imkonini yaratish. Maktabgacha ta`lim muassasalaridagi bolalar ta`lim tarbiya olish sharoitlarini yaxshilash va zamonaviy standartlarda bo'lishini ta`minlash.
                </div>
            </div>
        </div>
    </div>
</div>
