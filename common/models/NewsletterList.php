<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_newsletter_list".
 *
 * @property int $id
 * @property int $newsletter_id
 * @property int $list_id
 */
class NewsletterList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_newsletter_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['newsletter_id', 'list_id'], 'required'],
            [['newsletter_id', 'list_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'newsletter_id' => Yii::t('app', 'Newsletter ID'),
            'list_id' => Yii::t('app', 'List ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NewsletterListQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NewsletterListQuery(get_called_class());
    }
}
