<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_subscribers".
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int $subscribe_newsletters
 * @property string $date_added
 * @property string $url_code
 */
class Subscribers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_subscribers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subscribe_newsletters', 'date_added', 'url_code'], 'required'],
            [['subscribe_newsletters'], 'integer'],
            [['date_added'], 'safe'],
            [['email', 'first_name', 'last_name', 'url_code'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'subscribe_newsletters' => Yii::t('app', 'Subscribe Newsletters'),
            'date_added' => Yii::t('app', 'Date Added'),
            'url_code' => Yii::t('app', 'Url Code'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SubscribersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SubscribersQuery(get_called_class());
    }
}
