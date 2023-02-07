<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use dmstr\widgets\Alert;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Reset Password';

?>
<div class="auth-main-content auth-bg-image">
    <div class="d-table">
        <div class="d-tablecell">
            <div class="auth-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="form-content">
                            <div class="auth-logo">
                                <img src="../images/imgpsh_fullsize_anim.png" alt="Logo">    
                            </div> 
                            <h1 class="heading">Forgot password</h1>
                            <?php $form = ActiveForm::begin([
                                'enableAjaxValidation' => true,
                                'validateOnBlur' => false,
                                'validateOnChange' => true,
                            ]); ?>
                            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                            <div class="text-center">
                                <?= Html::submitButton('Send', ['class' => 'btn btn-primary userlogin']) ?>
                                <?= Html::a('Back Login?', Url::to('site/login', true), ['class'=>'fp-link']) ?>
                            </div>  
                            <?php ActiveForm::end(); ?>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>