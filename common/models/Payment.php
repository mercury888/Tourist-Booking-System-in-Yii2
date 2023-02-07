<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_payment".
 *
 * @property int $id
 * @property int $booking_id
 * @property string $transaction_no
 * @property string $resp_code
 * @property string $pan
 * @property int $created_at
 * @property string $status
 * @property string $fail_reason
 * @property int $amount
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_id', 'transaction_no', 'resp_code', 'pan', 'created_at', 'status', 'fail_reason', 'amount'], 'required'],
            [['booking_id', 'created_at', 'amount'], 'integer'],
            [['transaction_no', 'pan'], 'string', 'max' => 100],
            [['resp_code', 'status'], 'string', 'max' => 10],
            [['fail_reason'], 'string', 'max' => 200],
        ];
    }

    public function getBooking(){
        return $this->hasOne(Booking::className(),['id'=>'booking_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'booking_id' => Yii::t('app', 'Booking ID'),
            'transaction_no' => Yii::t('app', 'Transaction No'),
            'resp_code' => Yii::t('app', 'Resp Code'),
            'pan' => Yii::t('app', 'Pan'),
            'created_at' => Yii::t('app', 'Created At'),
            'status' => Yii::t('app', 'Status'),
            'fail_reason' => Yii::t('app', 'Fail Reason'),
            'amount' => Yii::t('app', 'Amount'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PaymentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PaymentQuery(get_called_class());
    }
}
