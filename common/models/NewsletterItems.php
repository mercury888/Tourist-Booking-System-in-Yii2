<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_newsletter_items".
 *
 * @property int $id
 * @property int $newsletter_id
 * @property int $item_id
 */
class NewsletterItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_newsletter_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['newsletter_id', 'item_id'], 'required'],
            [['newsletter_id', 'item_id'], 'integer'],
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
            'item_id' => Yii::t('app', 'Item ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NewsletterItemsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NewsletterItemsQuery(get_called_class());
    }
}
