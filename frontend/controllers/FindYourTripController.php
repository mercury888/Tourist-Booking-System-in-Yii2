<?php
namespace frontend\controllers;

// use frontend\models\ResendVerificationEmailForm;
// use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
use common\models\PackageSearch;
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
class FindYourTripController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex(){
        $searchModel = new PackageSearch();
        if($searchModel->load(Yii::$app->request->post())){}
        $dataProvider = $searchModel->newSearch();
        $dataProvider->pagination->pageSize = 10;
       

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        // return $this->render('index');
    }

   


  
}
