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
class BookingForm extends Model
{
    /* peronsla information fields */
    public $first_name;
    public $last_name;
    public $email;
    public $date_of_birth;
    public $passport_no;
    public $nationality;
    public $skype_id;
    public $gender;
    public $address;
    public $phone_no;
    public $mobile_no;

    /* emergency contact fields */
    public $full_name;
    public $emergency_address;
    public $emergency_phone_no;
    public $emergency_mobile_no;
    public $emergency_email;
    public $relationship;

  /* trip detail fields */
    public $package_id;
    public $start_date;
    public $end_date;
    public $pax;
    public $trip_name;
    public $hotel_booking_package;
    public $special_note;
    public $paying_per;
    public $amount;
    public $package_date_id;
    public $display_data;
    public $no_of_days;

    static $gender_lookup = [
        0 => 'Male',
        1 => 'Femail'
    ];

    static $hbp_lookup = [
        3 => '3 Star Hotel Package',
        5 => '5 Star Hotel Package'
    ];

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['first_name','last_name','phone_no','mobile_no', 'email', 'date_of_birth', 'passport_no','nationality','address','address'], 'required'],
            [['full_name','emergency_address', 'emergency_phone_no', 'emergency_mobile_no', 'emergency_email','relationship'], 'required'],
            [['package_id','start_date','end_date','pax','hotel_booking_package','special_note','paying_per'],'required'],
            ['pax','default','value'=>function($model){
                $model->pax = 1;
            }],
            [['amount','skype_id','trip_name','package_date_id','no_of_days'],'safe'],
            [['passport_no','skype','gender'],'safe'],
            // email has to be a valid email address
            [['emergency_email','email'], 'email'],
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
        $model->trip_start_date = $this->start_date;
        $model->trip_end_date = $this->end_date;
        $model->dates_price_id = $this->package_date_id;
        $model->emergency_id = $emergency_contact->id;
        $model->trip_name = $this->trip_name;
        $model->date = date('Y-m-d');
        $model->status = 0;
        $model->booking_no = 100000 + $next_id;
        $model->created_datetime = date('Y-m-d H:i:s');
        $model->save(false);
        return $model?$model:null;
        
    }

    public function totalPrice($package){
        $pax = $this->pax;
        $hotel_booking_package = $this->hotel_booking_package;
        $price = $this->hotel_booking_package==3?$package->price_3:$package->price_5;
        $paying_per = $this->paying_per;
        return ($pax * $price * $paying_per)/100;

    }

    public function saveEmergencyContact(){
        $model = new EmergencyContact;
        $model->name = $this->full_name;
        $model->relationship = $this->relationship;
        $model->address = $this->emergency_address;
        $model->phone_no = $this->emergency_phone_no;
        $model->mobile_no = $this->emergency_mobile_no;
        $model->email = $this->emergency_email;
        
        $model->save(false);
        return $model;
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

    public function setBookingAttributes(){
        $params = Yii::$app->request->queryParams;
        $this->display_data = $params;
        if(isset($params['dateid']) && !empty($params['dateid'])){
            $this->package_date_id = $params['dateid'];
            $this->setDates();
        } else {
            $this->package_date_id =  '';
            $this->end_date = $params['end_date'];
            $this->start_date = $params['end_date'];
            // $this->end_date = '';
        }
       
        // print_r($params); 
        // print_r($this->attributes); 
        
        // exit;
    }

    public function setDates(){
        $date_model = PackageDatePrice::findOne($this->package_date_id);
        $this->attributes = $date_model->attributes;
        // print_r($date_model->attributes);

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
