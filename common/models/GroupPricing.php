<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "group_pricing".
 *
 * @property int $id
 * @property int $min
 * @property int $max
 * @property int $price
 * @property int $package_id
 * @property int|null $sort_order
 */
class GroupPricing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_pricing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['min', 'max', 'price', 'package_id'], 'required'],
            [['min', 'max', 'price', 'package_id', 'sort_order'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'min' => 'Min',
            'max' => 'Max',
            'price' => 'Price',
            'package_id' => 'Package ID',
            'sort_order' => 'Sort Order',
        ];
    }
}
