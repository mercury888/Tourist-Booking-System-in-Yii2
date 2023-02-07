<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_trip_status".
 *
 * @property int $id
 * @property string $name
 * @property string $color
 * @property int $code
 */
class TripStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_trip_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'color', 'code'], 'required'],
            [['code'], 'integer'],
            [['name', 'color'], 'string', 'max' => 255],
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
            'color' => Yii::t('app', 'Color'),
            'code' => Yii::t('app', 'Code'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TripStatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TripStatusQuery(get_called_class());
    }
}
