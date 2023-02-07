<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_faq".
 *
 * @property int $id
 * @property int $lang_id
 * @property string $question
 * @property string $answer
 * @property int $display_order
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_faq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lang_id', 'question', 'answer', 'display_order'], 'required'],
            [['lang_id', 'display_order'], 'integer'],
            [['question', 'answer'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'lang_id' => Yii::t('app', 'Lang ID'),
            'question' => Yii::t('app', 'Question'),
            'answer' => Yii::t('app', 'Answer'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FaqQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FaqQuery(get_called_class());
    }
}
