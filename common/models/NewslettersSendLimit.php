<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_newsletters_send_limit".
 *
 * @property int $id
 * @property int $limit
 */
class NewslettersSendLimit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_newsletters_send_limit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['limit'], 'required'],
            [['limit'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'limit' => Yii::t('app', 'Limit'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NewslettersSendLimitQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NewslettersSendLimitQuery(get_called_class());
    }
}
