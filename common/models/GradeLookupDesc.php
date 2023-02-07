<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_grade_lookup_desc".
 *
 * @property int $id
 * @property int $grade_id
 * @property int $language_id
 * @property string $title
 * @property string $description
 */
class GradeLookupDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_grade_lookup_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grade_id', 'language_id', 'title', 'description'], 'required'],
            [['grade_id', 'language_id'], 'integer'],
            [['description'], 'string'],
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
            'grade_id' => Yii::t('app', 'Grade ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\GradeLookupDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\GradeLookupDescQuery(get_called_class());
    }
}
