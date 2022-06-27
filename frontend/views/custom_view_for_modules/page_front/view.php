<?php

use yii\helpers\Url;

$this->title = $model->title;


?>

<div id="blogpost">
    <section id="blogpost__news" class="container-fluid z-3 background-leaves">
        <div class="spacer50"></div>
        <div class="row h-100">
            <div class="col-12 col-sm-10 offset-sm-1 col-xl-8 offset-xl-2">

                <div class="wrapper bg-textile b-shadow">
                    <div class="inner">
                        <div class="spacer50"></div>
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="content">
                                    <h2 class="title mb-4"><?= $model->title ?></h2>
                                    <div class="share d-flex justify-content-between mb-5">

                                        <time datetime="2018-06-05"><i><?= Yii::$app->formatter->asDate($model->created_at) ?></i></time>
                                    </div>

                                    <div class="text">
                                        <?= $model->content ?>
                                        <div class="spacer25"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer100 d-none d-lg-block"></div>
                        <div class="spacer50 d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer100"></div>
    </section>

    <div class="layer layer-up z-3">
        <img src="/images/waves/anim/up.png" draggable="false">
    </div>
</div>
