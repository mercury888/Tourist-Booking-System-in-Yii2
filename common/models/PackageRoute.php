<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_package_route".
 *
 * @property int $id
 * @property int $package_id
 * @property string $location
 * @property float $latitude
 * @property float $longitude
 * @property int $position
 */
class PackageRoute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_package_route';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'location', 'latitude', 'longitude', 'position'], 'required'],
            [['package_id', 'position'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['location'], 'string', 'max' => 255],
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
            'location' => Yii::t('app', 'Location'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'position' => Yii::t('app', 'Position'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PackageRouteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PackageRouteQuery(get_called_class());
    }
}
