<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\PackageDatePrice;
use common\models\EmergencyContact;
use common\models\Booking;

/**
 * ContactForm is the model behind the contact form.
 */
class SimpleBookingForm extends Model
{
    /* peronsla information fields */
    public $name;
    public $email;
    public $trip_name;
    public $trip_start_date;
    public $nationality;
    public $amount;
   

  

   

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name','email','nationality ', 'trip_name', 'trip_start_date', 'amount'], 'required'],
           
            [['email'], 'email'],
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    public function saveSaveBooking(){

        $expression = new \yii\db\Expression("
            AUTO_INCREMENT
            FROM INFORMATION_SCHEMA.TABLES
            WHERE TABLE_SCHEMA = DATABASE()
            AND TABLE_NAME = 'tbl_booking'
            ");
            $next_id = (new \yii\db\Query)->select($expression)->scalar();
        $emergency_contact = $this->saveEmergencyContact();

        $model = new Booking;
        $model->attributes = $this->attributes;
        $model->name = $this->name;
        $model->email = $this->email;
        $model->trip_name = $this->trip_name;
        $model->trip_start_date = $this->trip_start_date;
        $model->nationality = $model->nationality;
        $model->amount = $this->amount;
        $model->date = date('Y-m-d');
        $model->status = 0;
        $model->booking_no = 100000 + $next_id;
        $model->created_datetime = date('Y-m-d H:i:s');
        $model->save(false);
        return $model?$model:null;
        
    }

 
    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
