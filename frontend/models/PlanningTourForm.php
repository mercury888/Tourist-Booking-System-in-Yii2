<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class PlanningTourForm extends Model
{
    public $first_name;
    public $last_name;
    public $email;
    public $address;
    public $phone;
    public $package_id;
    public $desired_depature_date;
    public $desired_duration;
    public $adult_guest_no;
    public $children_no;
    public $celebrting_special_occasion;
    public $message;
    public $how_did_you_hear_about_us;
    public $are_you_working_with_travel_agent;
    public $newsletter_signup;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['address','first_name','last_name', 'email', 'message','phone','desired_depature_date','desired_duration',
            'adult_guest_no','children_no','celebrting_special_occasion'], 'required'],
            [['name','address','email','body','phone','how_did_you_hear_about_us','are_you_working_with_travel_agent','newsletter_signup','package_id'],'safe'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    public function getName(){
        return $this->first_name. ' '. $this->last_name;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    // public function getName(){
    //     return $this->first_name.' '. $this->last_name;
    // }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose('startPlanningTour',['model' => $this])
            ->setTo($email)
            ->setFrom([Yii::$app->params['noReplyEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject('Your Trip Plan has been received')
            // ->setTextBody($this->message)
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
        return Yii::$app->mailer->compose('startPlanningTourAdmin',['model' => $this])
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setReplyTo([Yii::$app->params['noReplyEmail'] => Yii::$app->params['senderName']])
            ->setSubject('You have new trip plan from '.$this->name)
            // ->setTextBody($this->message)
            ->send();
    }
}
