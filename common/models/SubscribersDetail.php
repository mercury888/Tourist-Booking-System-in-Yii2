<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_subscribers_detail".
 *
 * @property int $id
 * @property int $subscriber_id
 * @property int $list_id
 * @property int $member_id
 */
class SubscribersDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_subscribers_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subscriber_id', 'list_id', 'member_id'], 'integer'],
            [['list_id'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subscriber_id' => Yii::t('app', 'Subscriber ID'),
            'list_id' => Yii::t('app', 'List ID'),
            'member_id' => Yii::t('app', 'Member ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SubscribersDetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SubscribersDetailQuery(get_called_class());
    }
}
