<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_additional_field".
 *
 * @property int $id
 * @property int $package_id
 * @property int $language_id
 * @property string $field
 * @property string $value
 */
class AdditionalField extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_additional_field';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'language_id', 'field', 'value'], 'required'],
            [['package_id', 'language_id'], 'integer'],
            [['value'], 'string'],
            [['field'], 'string', 'max' => 255],
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
            'field' => Yii::t('app', 'Field'),
            'value' => Yii::t('app', 'Value'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AdditionalFieldQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AdditionalFieldQuery(get_called_class());
    }
}
