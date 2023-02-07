<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_contact_log".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $contact
 * @property string $body
 * @property int $package_id 0=> contact us page; 1=> enquiry of package
 * @property string $link
 * @property string $date_sent
 */
class ContactLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_contact_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'contact', 'body', 'package_id', 'link', 'date_sent'], 'required'],
            [['body'], 'string'],
            [['package_id'], 'integer'],
            [['date_sent'], 'safe'],
            [['name', 'email', 'subject', 'contact', 'link'], 'string', 'max' => 255],
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
            'email' => Yii::t('app', 'Email'),
            'subject' => Yii::t('app', 'Subject'),
            'contact' => Yii::t('app', 'Contact'),
            'body' => Yii::t('app', 'Body'),
            'package_id' => Yii::t('app', 'Package ID'),
            'link' => Yii::t('app', 'Link'),
            'date_sent' => Yii::t('app', 'Date Sent'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ContactLogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ContactLogQuery(get_called_class());
    }
}
