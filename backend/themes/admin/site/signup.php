<?php
use kartik\form\ActiveForm;
use kartik\form\ActiveField;
use yii\helpers\Html;
use yii\helpers\Url;
use dmstr\widgets\Alert;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

?>
<div class="login-box">
    <div class="login-logo">
        <a href="/" target="_blank"><img style="width: 80%" src="<?php echo Url::toRoute('/images/logo.png')?>"></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign up</p>
        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin([
                    'enableAjaxValidation' => true,
                    'validateOnBlur' => false,
                    'validateOnChange' => true,
                ]); ?>

                <?= $form->field($model, 'email')->textInput(['autocomplete' => 'off']) ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'autocomplete' => 'off']) ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'confirm_password')->passwordInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary userlogin', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

                <!-- <div class="social-auth-links text-center">
                     <p>----- OR -----</p>
                     <a href="<?php echo Url::toRoute(["site/auth", "authclient" => "google"]); ?>" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google"></i> Sign up with
                       Google</a>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">                
                <?= Html::a('Already Registered ?', Url::to('site/login', true), ['class' => 'newuser'])?>                
            </div>
        </div>
    </div>
    <section class="content">
        <?= Alert::widget() ?>
    </section>

    <!-- /.signup-box-body -->
</div><!-- /.signup-box -->
