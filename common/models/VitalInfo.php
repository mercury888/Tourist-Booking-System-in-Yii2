<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vital_info".
 *
 * @property int $id
 * @property int $package_id
 * @property string $title
 * @property string $tab_name
 * @property string $detail
 * @property int|null $sort_order
 */
class VitalInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vital_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'title', 'tab_name', 'detail'], 'required'],
            [['package_id', 'sort_order'], 'integer'],
            [['detail'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['tab_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'package_id' => 'Package ID',
            'title' => 'Title',
            'tab_name' => 'Tab Name',
            'detail' => 'Detail',
            'sort_order' => 'Sort Order',
        ];
    }
}
