<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_destination_desc".
 *
 * @property int $id
 * @property int $destination_id
 * @property int $language_id
 * @property string $title
 * @property string $subtitle
 * @property string $description
 * @property string $highlight
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 */
class DestinationDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_destination_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['destination_id', 'language_id', 'title', 'subtitle', 'description', 'highlight', 'meta_title', 'meta_desc', 'meta_key'], 'required'],
            [['destination_id', 'language_id'], 'integer'],
            [['description', 'highlight'], 'string'],
            [['title', 'subtitle', 'meta_title', 'meta_desc', 'meta_key'], 'string', 'max' => 255],
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
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'subtitle' => Yii::t('app', 'Subtitle'),
            'description' => Yii::t('app', 'Description'),
            'highlight' => Yii::t('app', 'Highlight'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'meta_key' => Yii::t('app', 'Meta Key'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DestinationDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DestinationDescQuery(get_called_class());
    }
}
