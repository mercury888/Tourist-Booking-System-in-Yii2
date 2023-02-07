<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_content_desc".
 *
 * @property int $id
 * @property int $content_id
 * @property int $language_id
 * @property string $title
 * @property string $sub_title
 * @property string $detail
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 */
class ContentDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_content_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_id', 'language_id', 'title', 'sub_title', 'detail', 'meta_title', 'meta_desc', 'meta_key'], 'required'],
            [['content_id', 'language_id'], 'integer'],
            [['sub_title', 'detail'], 'string'],
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
            'content_id' => Yii::t('app', 'Content ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'sub_title' => Yii::t('app', 'Sub Title'),
            'detail' => Yii::t('app', 'Detail'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'meta_key' => Yii::t('app', 'Meta Key'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ContentDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ContentDescQuery(get_called_class());
    }
}
