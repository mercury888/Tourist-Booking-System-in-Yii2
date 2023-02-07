<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_emergency_contact".
 *
 * @property int $id
 * @property string $name
 * @property string $relationship
 * @property string $address
 * @property string $phone_no
 * @property string $mobile_no
 * @property string $email
 */
class EmergencyContact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_emergency_contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'relationship', 'address', 'phone_no', 'mobile_no', 'email'], 'required'],
            [['address'], 'string'],
            [['name', 'relationship', 'phone_no', 'mobile_no', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'relationship' => Yii::t('app', 'Relationship'),
            'address' => Yii::t('app', 'Address'),
            'phone_no' => Yii::t('app', 'Phone No'),
            'mobile_no' => Yii::t('app', 'Mobile No'),
            'email' => Yii::t('app', 'Email'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EmergencyContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EmergencyContactQuery(get_called_class());
    }
}
