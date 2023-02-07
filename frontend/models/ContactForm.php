<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $first_name;
    public $last_name;
    public $email;
    public $passport_no;
    public $phone;
    public $skype;
    public $gender;
    public $address;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['first_name','last_name', 'email', 'subject', 'body','phone','address'], 'required'],
            [['passport_no','skype','gender'],'safe'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
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

    public function getName(){
        return $this->first_name.' '. $this->last_name;
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmailAdmin($email)
    {
      
        return Yii::$app->mailer->compose('contactFormAdmin-html',['model'=>$this])
            ->setTo($email)
            ->setFrom([Yii::$app->params['noReplyEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->send();
    }
    public function sendEmail($email)
    {
      
        return Yii::$app->mailer->compose('contactForm-html',['model'=>$this])
            ->setTo($email)
            ->setFrom([Yii::$app->params['noReplyEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->send();
    }
}
