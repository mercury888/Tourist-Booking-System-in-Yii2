<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_slider".
 *
 * @property int $id
 * @property string $image
 * @property string $caption
 * @property string $link
 * @property int $target
 * @property int $type (0=>home; 1=>destination; 2=> activity; 3=>sub activity;4=>package;5=>pages)
 * @property int $type_id
 * @property int $display_order
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'caption', 'link', 'target', 'type', 'type_id', 'display_order'], 'required'],
            [['target', 'type', 'type_id', 'display_order'], 'integer'],
            [['image', 'caption', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'caption' => Yii::t('app', 'Caption'),
            'link' => Yii::t('app', 'Link'),
            'target' => Yii::t('app', 'Target'),
            'type' => Yii::t('app', 'Type'),
            'type_id' => Yii::t('app', 'Type ID'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SliderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SliderQuery(get_called_class());
    }
}
