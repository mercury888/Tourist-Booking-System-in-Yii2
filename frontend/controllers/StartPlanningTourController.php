<?php
namespace frontend\controllers;

// use frontend\models\ResendVerificationEmailForm;
// use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
use frontend\models\PlanningTourForm;
use common\models\Content;
use common\models\StartPlanningTour;

/**
 * Site controller
 */
class StartPlanningTourController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex(){
        $model = new PlanningTourForm;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $pmodel = new StartPlanningTour;
            $pmodel->attributes = $model->attributes;
            $pmodel->status = 0;
            $pmodel->save(false);
            if ($model->sendEmail($model->email)) {
                $model->sendEmailAdmin(Yii::$app->params['adminEmail']);
                Yii::$app->session->setFlash('success', 'Thank your trip plan has been received. We will be soon contact you.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error on sending your plan.');
            }
            return $this->refresh();
        }
        return $this->render('index',['model' => $model]);
    }

   


  
}
