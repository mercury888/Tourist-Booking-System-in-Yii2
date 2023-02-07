<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_department".
 *
 * @property int $id
 * @property string $name
 * @property int $display_order
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'display_order'], 'required'],
            [['display_order'], 'integer'],
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
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DepartmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DepartmentQuery(get_called_class());
    }
}
