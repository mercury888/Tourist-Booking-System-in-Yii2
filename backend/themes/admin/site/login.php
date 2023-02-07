<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use dmstr\widgets\Alert;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use common\models\Settings;
/* @var $this \yii\web\View */
/* @var $content string */

$bgImage = Settings::getCachedSetting('LOGIN_SCREEN_BACKGROUND');
$bgImage = $bgImage ? $bgImage : "/images/auth-bg-image.jpg";

$logo = Settings::getCachedSetting('APP_LOGO');
$logo = $logo ? $logo : "/images/imgpsh_fullsize_anim.png";

$this->title = 'Sign In';

?>
<script>
    $(document).ready(function() {
        $('#w0-success').removeClass('fade');
    });
</script>
<div class="preloader">
    <div class="d-table">
        <div class="d-tablecell">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
    </div>
</div>
<div class="auth-main-content auth-bg-image" style="background-image : url(<?= $bgImage ?>)">
    <div class="d-table">
        <div class="d-tablecell">
            <div class="auth-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="form-content">
                            <div><?= Alert::widget() ?></div>
                            <div class="auth-logo">
                                <img src="<?= $logo ?>" alt="Logo">    
                            </div>                            
                            <!-- <h1 class="heading">Log In</h1> -->
                            <?php $form = ActiveForm::begin(); ?>
                            <?= $form->field($model, 'email')->textInput(['autofocus' => true,'autocomplete' => 'off']) ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <div class="text-center">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary userlogin', 'name' => 'login-button']) ?>
                               <!--  <?= Html::a('Forgot Password?', Url::to('site/request-password-reset', true), ['class'=>'fp-link']) ?> -->
                            </div>
                            <?php ActiveForm::end(); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
