<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_subscribers_list".
 *
 * @property int $id
 * @property string $title
 * @property int $permanent o=>permanent,1=>temporary
 * @property string $date_added
 */
class SubscribersList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_subscribers_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'permanent', 'date_added'], 'required'],
            [['permanent'], 'integer'],
            [['date_added'], 'safe'],
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
            'title' => Yii::t('app', 'Title'),
            'permanent' => Yii::t('app', 'Permanent'),
            'date_added' => Yii::t('app', 'Date Added'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SubscribersListQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SubscribersListQuery(get_called_class());
    }
}
