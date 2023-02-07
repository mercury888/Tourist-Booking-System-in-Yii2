<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_grade_lookup".
 *
 * @property int $id
 * @property string $name
 * @property string $descriptions
 * @property int $code
 * @property int $position
 */
class GradeLookup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_grade_lookup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'descriptions', 'code', 'position'], 'required'],
            [['descriptions'], 'string'],
            [['code', 'position'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'descriptions' => Yii::t('app', 'Descriptions'),
            'code' => Yii::t('app', 'Code'),
            'position' => Yii::t('app', 'Position'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\GradeLookupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\GradeLookupQuery(get_called_class());
    }
}
