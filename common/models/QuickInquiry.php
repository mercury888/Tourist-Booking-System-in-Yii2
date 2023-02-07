<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quick_inquiry".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $message
 * @property int $create_time
 * @property int $status
 */
class QuickInquiry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quick_inquiry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address', 'message', 'create_time', 'status'], 'required'],
            [['message'], 'string'],
            [['create_time', 'status'], 'integer'],
            [['name', 'address'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'message' => 'Message',
            'create_time' => 'Create Time',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\QuickInquiryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\QuickInquiryQuery(get_called_class());
    }
}
