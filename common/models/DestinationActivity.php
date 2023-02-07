<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_destination_activity".
 *
 * @property int $id
 * @property int $destination_id
 * @property int $activity_id
 */
class DestinationActivity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_destination_activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['destination_id', 'activity_id'], 'required'],
            [['destination_id', 'activity_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'destination_id' => Yii::t('app', 'Destination ID'),
            'activity_id' => Yii::t('app', 'Activity ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DestinationActivityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DestinationActivityQuery(get_called_class());
    }
}
