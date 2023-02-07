<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_package_itinerary".
 *
 * @property int $id
 * @property int $package_id
 * @property int $language_id
 * @property string $day_no
 * @property string $short_desc
 * @property string $full_desc
 * @property int $display_order
 */
class PackageItinerary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_package_itinerary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'language_id', 'day_no', 'short_desc', 'full_desc', 'display_order'], 'required'],
            [['package_id', 'language_id', 'display_order'], 'integer'],
            [['short_desc', 'full_desc'], 'string'],
            [['day_no'], 'string', 'max' => 255],
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
            'language_id' => Yii::t('app', 'Language ID'),
            'day_no' => Yii::t('app', 'Day No'),
            'short_desc' => Yii::t('app', 'Short Desc'),
            'full_desc' => Yii::t('app', 'Full Desc'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PackageItineraryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PackageItineraryQuery(get_called_class());
    }
}
