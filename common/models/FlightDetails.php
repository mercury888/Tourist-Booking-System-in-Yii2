<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_flight_details".
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property string $from
 * @property string $date
 */
class FlightDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_flight_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number', 'from', 'date'], 'required'],
            [['date'], 'safe'],
            [['name', 'number', 'from'], 'string', 'max' => 255],
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
            'number' => Yii::t('app', 'Number'),
            'from' => Yii::t('app', 'From'),
            'date' => Yii::t('app', 'Date'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FlightDetailsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FlightDetailsQuery(get_called_class());
    }
}
