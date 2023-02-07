<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_newsletters_template".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 */
class NewslettersTemplate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_newsletters_template';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NewslettersTemplateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NewslettersTemplateQuery(get_called_class());
    }
}
