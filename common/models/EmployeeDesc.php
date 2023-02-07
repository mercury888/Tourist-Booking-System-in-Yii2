<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_employee_desc".
 *
 * @property int $id
 * @property int $employee_id
 * @property int $language_id
 * @property string $position
 * @property string $description
 */
class EmployeeDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_employee_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_id', 'language_id', 'position', 'description'], 'required'],
            [['employee_id', 'language_id'], 'integer'],
            [['description'], 'string'],
            [['position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'position' => Yii::t('app', 'Position'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EmployeeDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EmployeeDescQuery(get_called_class());
    }
}
