<?php
namespace frontend\controllers;

// use frontend\models\ResendVerificationEmailForm;
// use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
use common\models\Content;
use common\models\Package;
use common\models\Booking;
use common\models\Payment;
use frontend\models\SimpleBookingForm;
use common\components\HBLPayment;

/**
 * Site controller
 */
class ActivityController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex(){
        return $this->render('index');
    }
    
    public function actionBook() {
        $model = new SimpleBookingForm;
		if($model->load(Yii::$app->request->post()) && $model->validate()){
            $data = $model->saveSaveBooking();
            if($data){
                return $this->redirect($this->createUrl('/booking/booking-confirm/'.$model->id));
            }
        }
		return $this->render("book", array(
			"model" =>  $model
		));
        // return $this->render('book');
    }

    public function actionBookingConfirm(){
        $booking = Booking::model()->findByPk($bookingid);
		$model = Package::getPackageDetailsBySlug($this->langid,$booking->package->slug);
		$payment = new HBLPayment;
		$payment->_booking = $booking;
		/*if(!$model)
		{
			throw new CHttpException('404','Page not found');
			die;    
		}*/
        $this->layout = '/layouts/column1';
        $this->render('booking_confirm', array(
			'model' => $booking, 
			'package' => $model, 
			'payment' => $payment
		));
    }
   


  
}
