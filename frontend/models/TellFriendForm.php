<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class TellFriendForm extends Model
{
    public $name;
    public $email;
    public $friend_email;
    public $message;
    public $verifyCode;
    public $package_id;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name','friend_email', 'email','package_id'], 'required'],
            [['name'],'safe'],
            [['message'],'string'],
            // email has to be a valid email address
            [['email','friend_email'], 'email'],
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function attributeLabels()
    // {
    //     return [
    //         'verifyCode' => 'Verification Code',
    //     ];
    // }

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
      
        $package = Package::findOne($this->package_id);
        $this->subject = 'Check Out: '.$package->name;
        return Yii::$app->mailer->compose('tellFriend-html',['model'=>$package])
            ->setTo($email)
            ->setFrom([ $this->email => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setHtmlBody($html)
            ->send();
    }
}