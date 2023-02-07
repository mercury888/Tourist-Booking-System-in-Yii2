<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_featured_items".
 *
 * @property int $id
 * @property int $package_id
 * @property int $display_order
 */
class FeaturedItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_featured_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'package_id', 'display_order'], 'required'],
            [['id', 'package_id', 'display_order'], 'integer'],
            [['id', 'package_id'], 'unique', 'targetAttribute' => ['id', 'package_id']],
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
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

   
    /**
     * {@inheritdoc}
     * @return \common\models\query\FeaturedItemsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FeaturedItemsQuery(get_called_class());
    }
}
