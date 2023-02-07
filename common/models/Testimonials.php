<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_testimonials".
 *
 * @property int $id
 * @property string $name
 * @property string $company
 * @property string $position
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $created_datetime
 * @property int $visible
 * @property int $display_order
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_testimonials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'company', 'position', 'title', 'description', 'image', 'created_datetime', 'visible', 'display_order'], 'required'],
            [['description'], 'string'],
            [['created_datetime'], 'safe'],
            [['visible', 'display_order'], 'integer'],
            [['name', 'company', 'position', 'title', 'image'], 'string', 'max' => 255],
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
            'company' => Yii::t('app', 'Company'),
            'position' => Yii::t('app', 'Position'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'image' => Yii::t('app', 'Image'),
            'created_datetime' => Yii::t('app', 'Created Datetime'),
            'visible' => Yii::t('app', 'Visible'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TestimonialsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TestimonialsQuery(get_called_class());
    }
}
