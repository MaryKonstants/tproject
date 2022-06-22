<?php

use yii\helpers\Url;

?>

<?php if(Yii::$app->user->can("costom_modules")) { ?>
    <li><a class="subheader grey-text"><i class="material-icons grey-text tiny">public</i> <?= Yii::t('app', 'Мои модули')?></a></li>
<?php } ?>

<?php if(Yii::$app->user->can("costom_module")) { ?>
    <li class="<?= (Yii::$app->controller->module->id=='costom_module' && Yii::$app->controller->id=='back')?'active':''; ?>"><a class="waves-effect waves-teal" href="<?= Url::toRoute('/costom_module/back/index') ?>"><i class="material-icons">pageview</i> <?= Yii::t('app', 'Мой модуль') ?></a></li>
<?php } ?>
