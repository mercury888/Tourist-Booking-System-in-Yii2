<?php
namespace frontend\controllers;


// use frontend\models\ResendVerificationEmailForm;
// use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
use frontend\models\ReviewForm;
use frontend\models\TellFriendForm;
use common\models\Review;
use yii\web\NotFoundHttpException;

// use yii\filters\VerbFilter;
// use yii\filters\AccessControl;
// use common\models\LoginForm;
use common\models\Content;
// use frontend\models\PasswordResetRequestForm;
// use frontend\models\ResetPasswordForm;
// use frontend\models\SignupForm;
// use frontend\models\ContactForm;

use common\models\Package;

/**
 * Site controller
 */
class PackageController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionSlug($slug){
        $rform = new ReviewForm;
        $tf_form = new TellFriendForm;
        $model = Package::find()->where(['slug'=>$slug])->one();
        if(Yii::$app->request->isAjax){
            $rform->package_id = $model->id;
            Yii::$app->response->format = Response::FORMAT_JSON;
            $rform->url = 'www.mountainsherpatrekking.com';
            if($rform->load(Yii::$app->request->post()) && $rform->validate()){
                $review_model = new Review;
                $review_model->attributes = $rform->attributes;
                $review_model->why_did_you_choose = json_encode($rform->why_did_you_choose);
                $review_model->author = $rform->name;
                $review_model->status = 0;
                $review_model->author_id = Yii::$app->user->isGuest?0:Yii::$app->user->id;
                $review_model->create_time = time();
                $review_model->save(false);
                return [
                    'status' =>'success',
                    'data' => $review_model->attributes
                ];
                    // here
            } else {
                return [
                    'status' =>'error',
                    'data' => $rform->getErrors()
                ];
                // return $rform->getErrors();
            }            
            Yii::$app->end();
        }
        return $this->render('view',['model'=>$model,'rform' => $rform,'tf_form'=>$tf_form]);
    }


    public function actionTellFriend($id){
        $package = $this->findModel($id);
        $model = new TellFriendForm;
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($model->load(Yii::$app->request->post()) && $model->validate()){
                $model->sendEmail($model->friend_email);
                return [
                    'status' =>'success',
                    'data' =>'Travel Detail has been sent to your friend'
                ];
            } else {
                return [
                    'status' =>'error',
                    'data' => $model->getErrors()
                ];
            }
        }
    }




    public function actionLoadBlogRelatedPackage($id){
        $pids = $_POST['package'];
        $pids_arr = explode(',',$pids);
        $packages = Package::find()->where(['in','id',$pids_arr])->all();
        Yii::$app->response->format = Response::FORMAT_JSON;
        return [
            'status'=>'success',
            'data'=>$this->renderAjax('include/blog-package',['model' => $packages])
        ];
    }

    public function actionDateParam($id){
        $model = Package::findOne($id);
        if($model){
            $start_date = $_POST['sdate'];
            $duration = $model->duration;
            $time_start_date = strtotime($start_date);
            $end_date = date('Y-m-d',strtotime("+$duration day",$time_start_date));
            $datename = date('M d',$time_start_date).' To '.date('M d',strtotime($end_date));
            $year = date('Y',$time_start_date);
            $datekey = null;
            $dateid = null;
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'yeardate' => $year,
                'dategname' => $datename,
                'year' => $year,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'datekey' => $datekey,
                'dateid' => $dateid,
            ];

        }
    }
   

/**
     * Finds the Package model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Package the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Package::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
  
}
