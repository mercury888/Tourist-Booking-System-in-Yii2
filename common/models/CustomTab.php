<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_custom_tab".
 *
 * @property int $id
 * @property int $package_id
 * @property string $name
 * @property int $display_order
 */
class CustomTab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_custom_tab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'name', 'display_order'], 'required'],
            [['package_id', 'display_order'], 'integer'],
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
            'package_id' => Yii::t('app', 'Package ID'),
            'name' => Yii::t('app', 'Name'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CustomTabQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CustomTabQuery(get_called_class());
    }
}
