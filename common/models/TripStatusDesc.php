<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_trip_status_desc".
 *
 * @property int $id
 * @property int $trip_status_id
 * @property int $language_id
 * @property string $title
 * @property string $description
 */
class TripStatusDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_trip_status_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['trip_status_id', 'language_id', 'title', 'description'], 'required'],
            [['trip_status_id', 'language_id'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'trip_status_id' => Yii::t('app', 'Trip Status ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TripStatusDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TripStatusDescQuery(get_called_class());
    }
}
