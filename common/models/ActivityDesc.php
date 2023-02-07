<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_activity_desc".
 *
 * @property int $id
 * @property int $activity_id
 * @property int $language_id
 * @property string $title
 * @property string $description
 * @property string $highlight
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 */
class ActivityDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_activity_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id', 'language_id', 'title', 'description', 'highlight', 'meta_title', 'meta_desc', 'meta_key'], 'required'],
            [['activity_id', 'language_id'], 'integer'],
            [['description', 'highlight'], 'string'],
            [['title', 'meta_title', 'meta_desc', 'meta_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'activity_id' => Yii::t('app', 'Activity ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'highlight' => Yii::t('app', 'Highlight'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'meta_key' => Yii::t('app', 'Meta Key'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActivityDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActivityDescQuery(get_called_class());
    }
}
