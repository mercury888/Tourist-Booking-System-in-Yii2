<?php
namespace frontend\controllers;

// use frontend\models\ResendVerificationEmailForm;
// use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
// use yii\filters\VerbFilter;
// use yii\filters\AccessControl;
// use common\models\LoginForm;
use common\models\Content;
// use frontend\models\PasswordResetRequestForm;
// use frontend\models\ResetPasswordForm;
// use frontend\models\SignupForm;
// use frontend\models\ContactForm;

/**
 * Site controller
 */
class PageController extends Controller
{
    public $enableCsrfValidation = false;
    
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionSlug($slug)
    {
        $model = Content::find()->where(['slug'=>$slug])->one();
        return $this->render('view',['model'=>$model]);
    }

    public function actionTeam(){
        return $this->render('team');
    }

   


  
}
