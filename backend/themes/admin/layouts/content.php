<?php
use yii\widgets\Breadcrumbs;
// use dmstr\widgets\Alert;
use common\models\Settings;

$appName = null;
// $appName = Settings::getCachedSetting('APP_NAME');
$appName = $appName ? $appName : "TextyTools";

?>
<div class="main-content d-flex flex-column"> <!-- hide-sidemenu -->
    <div class="main-content-header">
        
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
        <?php } else { ?>
            <h1>
                <?php
                if ($this->title !== null) {
                    echo \yii\helpers\Html::encode($this->title);
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } ?>
            </h1>
        <?php } ?>

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
                
    </div>

    <div>
        <?php //Alert::widget() ?>
        <?= $content ?>
    </div>
         
    <!-- This conditions used for conditional footer rendering like login, signup etc pages not showing the footer -->
    <!-- Footer -->
    <div class="flex-grow-1"></div>
    <footer class="footer mt-1">
        <p>Copyright © <?= date('Y') ?> <?= $appName ?>. All rights reserved</p>
    </footer>
</div>
<script>
    $(document).ready(function() {
        $('#w1-success').removeClass('fade in');
        $('#w1-success').addClass('card-body');
    });
</script>
<!-- End Main Content Wrapper -->