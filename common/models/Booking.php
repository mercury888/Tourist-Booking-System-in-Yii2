<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_booking".
 *
 * @property int $id
 * @property int $package_id
 * @property int $dates_price_id
 * @property int $arrive_flight arrival flight details from flight_detail
 * @property int $dep_flight departure flight details from flight_detail
 * @property int $emergency_id
 * @property int $insurance_id
 * @property int $booking_no
 * @property string $name
 * @property string $address
 * @property string $phone_no
 * @property string $mobile_no
 * @property string $skype_id
 * @property string $passport_no
 * @property string $email
 * @property string $date_of_birth
 * @property int $gender
 * @property string $nationality
 * @property string $trip_name
 * @property string $trip_start_date
 * @property string $trip_end_date
 * @property int $no_of_days
 * @property int $hotel_booking
 * @property int $pax passenger no
 * @property string $medical_condition
 * @property string $special_note
 * @property string $date
 * @property string $created_datetime
 * @property int $hotel_booking_package
 * @property int $paying_per
 * @property int $status 0=not paid, 1= paid
 * @property int $type 0=no, 1=yes
 * @property float $amount
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'dates_price_id', 'arrive_flight', 'dep_flight', 'emergency_id', 'insurance_id', 'booking_no', 'name', 'address', 'phone_no', 'mobile_no', 'skype_id', 'passport_no', 'email', 'date_of_birth', 'gender', 'nationality', 'trip_name', 'trip_start_date', 'trip_end_date', 'no_of_days', 'hotel_booking', 'pax', 'medical_condition', 'special_note', 'date', 'created_datetime', 'hotel_booking_package', 'paying_per', 'amount'], 'required'],
            [['package_id', 'dates_price_id', 'arrive_flight', 'dep_flight', 'emergency_id', 'insurance_id', 'booking_no', 'gender', 'no_of_days', 'hotel_booking', 'pax', 'hotel_booking_package', 'paying_per', 'status', 'type'], 'integer'],
            [['address', 'medical_condition', 'special_note'], 'string'],
            [['date_of_birth', 'trip_start_date', 'trip_end_date', 'date', 'created_datetime'], 'safe'],
            [['amount'], 'number'],
            [['name', 'phone_no', 'mobile_no', 'skype_id', 'passport_no', 'email', 'nationality', 'trip_name'], 'string', 'max' => 255],
        ];
    }

    public function getPackage(){
        return $this->hasOne(Package::className(),['id' => 'package_id']);
    }

    public function getFormatAmount(){

		return sprintf('%012d', ($this->amount * 100));
	}

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'package_id' => Yii::t('app', 'Package ID'),
            'dates_price_id' => Yii::t('app', 'Dates Price ID'),
            'arrive_flight' => Yii::t('app', 'Arrive Flight'),
            'dep_flight' => Yii::t('app', 'Dep Flight'),
            'emergency_id' => Yii::t('app', 'Emergency ID'),
            'insurance_id' => Yii::t('app', 'Insurance ID'),
            'booking_no' => Yii::t('app', 'Booking No'),
            'name' => Yii::t('app', 'Name'),
            'address' => Yii::t('app', 'Address'),
            'phone_no' => Yii::t('app', 'Phone No'),
            'mobile_no' => Yii::t('app', 'Mobile No'),
            'skype_id' => Yii::t('app', 'Skype ID'),
            'passport_no' => Yii::t('app', 'Passport No'),
            'email' => Yii::t('app', 'Email'),
            'date_of_birth' => Yii::t('app', 'Date Of Birth'),
            'gender' => Yii::t('app', 'Gender'),
            'nationality' => Yii::t('app', 'Nationality'),
            'trip_name' => Yii::t('app', 'Trip Name'),
            'trip_start_date' => Yii::t('app', 'Trip Start Date'),
            'trip_end_date' => Yii::t('app', 'Trip End Date'),
            'no_of_days' => Yii::t('app', 'No Of Days'),
            'hotel_booking' => Yii::t('app', 'Hotel Booking'),
            'pax' => Yii::t('app', 'Pax'),
            'medical_condition' => Yii::t('app', 'Medical Condition'),
            'special_note' => Yii::t('app', 'Special Note'),
            'date' => Yii::t('app', 'Date'),
            'created_datetime' => Yii::t('app', 'Created Datetime'),
            'hotel_booking_package' => Yii::t('app', 'Hotel Booking Package'),
            'paying_per' => Yii::t('app', 'Paying Per'),
            'status' => Yii::t('app', 'Status'),
            'type' => Yii::t('app', 'Type'),
            'amount' => Yii::t('app', 'Amount'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BookingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BookingQuery(get_called_class());
    }
}
