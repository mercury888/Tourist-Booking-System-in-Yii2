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
use common\models\CustomizedPrivateBooking;
use frontend\models\BookingForm;
use frontend\models\PlanningTourForm;
use frontend\models\PrivateBookingForm;
use common\components\HBLPayment;

/**
 * Site controller
 */
class BookingController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex(){
        return $this->render('index');
    }
    
    public function actionSlug($slug){
        $model = Package::find()->where(['slug'=>$slug])->one();
        $booking_form = new BookingForm;
        $booking_form->package_id = $model->id;
        $booking_form->setBookingAttributes();
        // $package = Package::findOne($booking_form->package_id);
        $booking_form->trip_name = $model->name;
        $booking_form->no_of_days = $model->duration;
        if($booking_form->load(Yii::$app->request->post()) && $booking_form->validate()){
            $booking_form->amount = $booking_form->totalPrice($model);
            if($booking_form->saveSaveBooking()){
                return $this->redirect(['confirm-booking','id'=> $model->id]);
            }
        } else {
        }
       
        return $this->render('index',['model'=>$model,'booking_form' => $booking_form]);
    }

    public function actionPrivateBooking($slug){
        $package = Package::find()->where(['slug'=>$slug])->one();
        $model = new PrivateBookingForm;
        $model->package_id = $package->id;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $bmodel = new CustomizedPrivateBooking;
            $bmodel->attributes = $model->attributes;
            $bmodel->type='private';
            $bmodel->status=0;
           
            if($bmodel->save(false)){
                if ($model->sendEmail($model->email)) {
                    $model->sendEmailAdmin(Yii::$app->params['adminEmail']);
                    Yii::$app->session->setFlash('success', 'Thank your trip plan has been received. We will be soon contact you.');
                } else {
                    Yii::$app->session->setFlash('error', 'There was an error on sending your plan.');
                }
                return $this->refresh();
            }
        }
        return $this->render('private-booking',['model' => $model,'package' => $package]);
    }

    public function actionCustomizedBooking($slug){
        $package = Package::find()->where(['slug'=>$slug])->one();
        $model = new PrivateBookingForm;
        $model->package_id = $package->id;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $bmodel = new CustomizedPrivateBooking;
            $bmodel->attributes = $model->attributes;
            $bmodel->type='customized';
            $bmodel->status=0;
           
            if($bmodel->save(false)){
                if ($model->sendEmail($model->email)) {
                    $model->sendEmailAdmin(Yii::$app->params['adminEmail']);
                    Yii::$app->session->setFlash('success', 'Thank your trip plan has been received. We will be soon contact you.');
                } else {
                    Yii::$app->session->setFlash('error', 'There was an error on sending your plan.');
                }
                return $this->refresh();
            }
        }
        return $this->render('customized-booking',['model' => $model,'package' => $package]);
    }
    
    public function actionBookingSuccess($id){
        $model = Booking::findOne($id);
        return $this->render('success',['model'=>$model]);
    }

    public function actionCalculatePrice($id){
        $model = Package::find()->where(['id'=>$id])->one();
        $pax = $_POST['pax'];
        $paying_for = $_POST['paying_for'];
        $price = $paying_for==5?$model->price_5:$model->price;
        $paying_per = $_POST['paying_percentage'];
        Yii::$app->response->format = Response::FORMAT_JSON;
        $price = ($pax * $price * $paying_per)/100;
        return [ 'price' => $price.'<sup>USD</sup>' ];
    }

    public function actionConfirmBooking($id){
        $booking = Booking::findOne($id);
        // print_r($booking);
        // exit;
		$model = $booking->package; //Package::getPackageDetailsBySlug($this->langid,$booking->package->slug);
		$payment = new HBLPayment;
		$payment->_booking = $booking;
        return $this->render('payment-form', [
			'model' => $booking, 
			'package' => $model, 
			'payment' => $payment
        ]);
    }

    public function actionProcessPayment(){
        $get = json_encode($_GET);
		$post = json_encode($_POST);
		$request = json_encode($_REQUEST);
		$time = date("Y-m-d H:i:s");
		$sql = "insert into tbl_bplog(get_response,post_response,request_response,created_at) values('$get','$post','$request','$time')";
		$query  = Yii::app()->db->createCommand($sql)->execute();
		$data = $_POST;
		if(!empty($data)){
			$payment = new HBLPayment;
			$payment->_response = $data;
		
			$prepareData = $payment->prepareData();
			$paymentModel = Payment::find()->where(["booking_id" =>$prepareData["booking_id"]])->one();
			
			if(count($paymentModel) == 0){
				$paymentModel = new Payment;
			}
			
			$paymentModel->attributes = $prepareData;


			if($paymentModel->save(false)){
				$paymentModel->booking->status = 1;
				$paymentModel->booking->save(false);
				$payment::sendAdminBookingEmail($paymentModel);
				$payment::sendCustomerBookingEmail($paymentModel);
				
				return $this->redirect(['success','id'=>$prepareData["booking_id"]]);
//				
			}else{
				// throw new CHttpException('404','There is some problem in making payment.');
				// die;  
			}
		}
		else{
			// throw new CHttpException('404','There is some problem.');
			// die;  
		}
    }
   


  
}
