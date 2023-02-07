<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_package_date_price".
 *
 * @property int $id
 * @property int $package_id
 * @property string $start_date
 * @property string $end_date
 * @property int $status
 * @property float $cost
 */
class PackageDatePrice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_package_date_price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'start_date', 'end_date', 'status', 'cost'], 'required'],
            [['package_id', 'status'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['cost'], 'number'],
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
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'status' => Yii::t('app', 'Status'),
            'cost' => Yii::t('app', 'Cost'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PackageDatePriceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PackageDatePriceQuery(get_called_class());
    }
}
