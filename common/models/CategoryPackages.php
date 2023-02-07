<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_category_packages".
 *
 * @property int $id
 * @property int $category_id
 * @property int $package_id
 */
class CategoryPackages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_category_packages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'package_id'], 'required'],
            [['category_id', 'package_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'package_id' => Yii::t('app', 'Package ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CategoryPackagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CategoryPackagesQuery(get_called_class());
    }
}
