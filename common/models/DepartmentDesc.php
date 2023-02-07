<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_department_desc".
 *
 * @property int $id
 * @property int $department_id
 * @property int $language_id
 * @property string $title
 * @property string $description
 */
class DepartmentDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_department_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'language_id', 'title', 'description'], 'required'],
            [['department_id', 'language_id'], 'integer'],
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
            'department_id' => Yii::t('app', 'Department ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DepartmentDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DepartmentDescQuery(get_called_class());
    }
}
