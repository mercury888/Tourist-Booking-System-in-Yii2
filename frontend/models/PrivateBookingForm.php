<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class PrivateBookingForm extends Model
{
    public $first_name;
    public $last_name;
    public $email;
    public $address;
    
    public $phone;
    public $package_id;
    public $desired_depature_date;
    public $no_of_adults;
    public $no_of_children;
    public $travelled_withus_before;
    public $working_with_travel_agent;
    public $want_extra_advice;
    public $message;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['address','first_name','last_name', 'email', 'message','phone','package_id','desired_depature_date','working_with_travel_agent',
            'no_of_adults','no_of_children','travelled_withus_before','want_extra_advice'], 'required'],
            [['name','address','email','message','phone','first_name','last_name'],'safe'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
        ];
    }

   
    public function getName(){
        return $this->first_name.' '. $this->last_name;
    }



    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose('privateBooking-html',['model'=>$this])
            ->setTo($email)
            ->setFrom([Yii::$app->params['noReplyEmail'] => Yii::$app->params['senderName']])
            // ->setReplyTo([$this->email => $this->name])
            ->setSubject('We have received your booking information | Mountainsherpatrekking.com')
            ->setTextBody($this->message)
            ->send();
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmailAdmin($email)
    {
        return Yii::$app->mailer->compose('privateBooking-html',['model'=>$this])
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            // ->setReplyTo([$this->email => $this->name])
            ->setSubject('You have new booking inquiry from '.$this->name.' | Mountainsherpatrekking.com')
            ->setTextBody($this->message)
            ->send();
    }
}
