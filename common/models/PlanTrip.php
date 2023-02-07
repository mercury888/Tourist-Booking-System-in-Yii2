<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_plan_trip".
 *
 * @property int $id
 * @property string $trip_name
 * @property string $trip_duration
 * @property string $price
 * @property string $name
 * @property string $email
 * @property string $country
 * @property string $phone
 * @property string $mobile
 * @property string $message
 * @property string $ipaddress
 * @property string $created_at
 */
class PlanTrip extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_plan_trip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['trip_name', 'trip_duration', 'price', 'name', 'email', 'country', 'phone', 'mobile', 'message', 'ipaddress', 'created_at'], 'required'],
            [['message'], 'string'],
            [['created_at'], 'safe'],
            [['trip_name', 'trip_duration', 'price', 'name', 'email', 'country'], 'string', 'max' => 255],
            [['phone', 'mobile', 'ipaddress'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'trip_name' => Yii::t('app', 'Trip Name'),
            'trip_duration' => Yii::t('app', 'Trip Duration'),
            'price' => Yii::t('app', 'Price'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'country' => Yii::t('app', 'Country'),
            'phone' => Yii::t('app', 'Phone'),
            'mobile' => Yii::t('app', 'Mobile'),
            'message' => Yii::t('app', 'Message'),
            'ipaddress' => Yii::t('app', 'Ipaddress'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PlanTripQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PlanTripQuery(get_called_class());
    }
}
