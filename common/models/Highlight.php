<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_highlight".
 *
 * @property int $id
 * @property int $package_id
 * @property int $language_id
 * @property string $feature
 */
class Highlight extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_highlight';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'language_id', 'feature'], 'required'],
            [['package_id', 'language_id'], 'integer'],
            [['feature'], 'string'],
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
            'feature' => Yii::t('app', 'Feature'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\HighlightQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HighlightQuery(get_called_class());
    }
}
