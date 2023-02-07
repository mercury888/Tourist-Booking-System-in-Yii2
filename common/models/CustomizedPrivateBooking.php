<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "customized_private_booking".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property int|null $package_id
 * @property string $desired_depature_date
 * @property int $adult_guest_no
 * @property int|null $children_no
 * @property string $message
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 * @property string $phone
 * @property int $travelled_withus_before
 * @property int $working_with_travel_agent
 * @property int $want_extra_advice
 * @property string $type private or customized
 */
class CustomizedPrivateBooking extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'create_time',
                'updatedAtAttribute' => 'update_time',
                'value' => time(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customized_private_booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'address', 'desired_depature_date', 'adult_guest_no', 'message','phone', 'travelled_withus_before', 'working_with_travel_agent', 'want_extra_advice'], 'required'],
            [['package_id', 'adult_guest_no', 'children_no', 'create_time', 'update_time', 'status', 'travelled_withus_before', 'working_with_travel_agent', 'want_extra_advice'], 'integer'],
            [['desired_depature_date', 'type'], 'safe'],
            [['message'], 'string'],
            [['first_name', 'last_name', 'email'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 250],
            [['phone'], 'string', 'max' => 15],
            [['type'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'address' => 'Address',
            'package_id' => 'Package ID',
            'desired_depature_date' => 'Desired Depature Date',
            'adult_guest_no' => 'Adult Guest No',
            'children_no' => 'Children No',
            'message' => 'Message',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'status' => 'Status',
            'phone' => 'Phone',
            'travelled_withus_before' => 'Travelled Withus Before',
            'working_with_travel_agent' => 'Working With Travel Agent',
            'want_extra_advice' => 'Want Extra Advice',
            'type' => 'Type',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CustomizedPrivateBookingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CustomizedPrivateBookingQuery(get_called_class());
    }
}
