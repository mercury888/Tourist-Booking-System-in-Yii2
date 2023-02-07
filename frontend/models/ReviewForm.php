<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ReviewForm extends Model
{
    public $first_name;
    public $last_name;
    public $email;
    public $gender;
    public $country;
    public $content;
    public $title;
    public $rating;
    public $pre_trip_info_rating;
    public $meal_rating;
    public $staffs_rating;
    public $transportation_rating;
    public $accommodation_rating;
    public $vale_of_money_rating;
    public $why_did_you_choose;
    public $why_did_you_choose_this_trip;
    public $most_memorable_parts_this_trip;
    public $would_you_recomend;
    public $advice_traveller;
    public $package_id;
    public $url;
    public $confirm;



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['first_name','last_name', 'email', 'gender','country','content','title',
            'rating','pre_trip_info_rating','meal_rating','staffs_rating','transportation_rating','accommodation_rating','vale_of_money_rating',
            'would_you_recomend','advice_traveller','package_id','url','why_did_you_choose_this_trip','most_memorable_parts_this_trip',
            'why_did_you_choose'], 'required'],

           
            [['first_name','last_name', 'email', 'gender','country','content','title','most_memorable_parts_this_trip','why_did_you_choose_this_trip',
            'rating','pre_trip_info_rating','meal_rating','staffs_rating','transportation_rating','accommodation_rating','vale_of_money_rating',
            'why_did_you_choose','would_you_recomend','advice_traveller','package_id','url','confirm'],'safe'],
            // email has to be a valid email address
            ['email', 'email'],
            // ['email', 'email'],
            // ['why_did_you_choose','validateCountry'],
            // ['why_did_you_choose', 'required', 'isEmpty' => function ($value) {
            //     return empty($this->why_did_you_choose);
            // }]
           
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    public function validateCountry($attribute, $params, $validator)
    {
        // print_r($this->$attribute); exit;
        if (empty($this->$attribute)) {
            $this->addError($attribute, 'The country must be either "USA" or "Indonesia".');
        }
    }
   

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'body' => 'Message'
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
    // public function sendEmail($email)
    // {
    //     return Yii::$app->mailer->compose()
    //         ->setTo($email)
    //         ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
    //         ->setReplyTo([$this->email => $this->name])
    //         ->setSubject($this->subject)
    //         ->setTextBody($this->body)
    //         ->send();
    // }
}
