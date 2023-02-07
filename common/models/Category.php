<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_category".
 *
 * @property int $id
 * @property int $activity_id
 * @property int $parent_id 0=> parent; -1 => special categories; >0 => parent category
 * @property string $name
 * @property string $image
 * @property string $bg_image background image
 * @property int $visible
 * @property string $slug
 * @property int $display_order
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id', 'parent_id', 'name', 'image', 'bg_image', 'visible', 'slug', 'display_order'], 'required'],
            [['activity_id', 'parent_id', 'visible', 'display_order'], 'integer'],
            [['name', 'image', 'bg_image', 'slug'], 'string', 'max' => 255],
        ];
    }

   
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'activity_id' => Yii::t('app', 'Activity ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
            'bg_image' => Yii::t('app', 'Bg Image'),
            'visible' => Yii::t('app', 'Visible'),
            'slug' => Yii::t('app', 'Slug'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CategoryQuery(get_called_class());
    }
}
