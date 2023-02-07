<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_top_destination".
 *
 * @property int $id
 * @property int $destination_id
 * @property int $display_order
 */
class TopDestination extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_top_destination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['destination_id', 'display_order'], 'required'],
            [['destination_id', 'display_order'], 'integer'],
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
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TopDestinationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TopDestinationQuery(get_called_class());
    }
}
