<?php
use yii\helpers\Html;
use backend\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);

if (Yii::$app->controller->action->id === 'login' || Yii::$app->controller->action->id === 'request-password-reset' || Yii::$app->controller->action->id === 'signup' || Yii::$app->controller->action->id === 'reset-password') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    /*if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }*/
    
    //dmstr\web\AdminLteAsset::register($this);

    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
        <head>
            <meta charset="<?= Yii::$app->charset ?>"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?= Html::csrfMetaTags() ?>
            <title><?= Html::encode($this->title) ?></title>
            <?php $this->head() ?>
        </head>
        <body>
            <!-- Preloader -->
            <!-- <div class="preloader">
                <div class="d-table">
                    <div class="d-tablecell">
                        <span class="loader">
                            <span class="loader-inner"></span>
                        </span>
                    </div>
                </div>
            </div> -->
            <?php $this->beginBody() ?>

                <?= $this->render(
                    'header.php'
                ) ?>

                <?= $this->render(
                    'left.php'
                )
                ?>

                <?= $this->render(
                    'content.php',
                    ['content' => $content]
                ) ?>

            <?php $this->endBody() ?>
        </body>
    </html>
<?php $this->endPage() ?>
<?php } ?>
