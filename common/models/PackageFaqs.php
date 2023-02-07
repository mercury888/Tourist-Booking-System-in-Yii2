<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_package_faqs".
 *
 * @property int $id
 * @property int $package_id
 * @property int $language_id
 * @property string $question
 * @property string $answer
 */
class PackageFaqs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_package_faqs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'language_id', 'question', 'answer'], 'required'],
            [['package_id', 'language_id'], 'integer'],
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
            'package_id' => Yii::t('app', 'Package ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'question' => Yii::t('app', 'Question'),
            'answer' => Yii::t('app', 'Answer'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PackageFaqsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PackageFaqsQuery(get_called_class());
    }
}
