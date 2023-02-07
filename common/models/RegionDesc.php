<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_region_desc".
 *
 * @property int $id
 * @property int $region_id
 * @property int $language_id
 * @property string $title
 * @property string $subtitle
 * @property string $description
 * @property string $highlight
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 */
class RegionDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_region_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'language_id', 'title', 'subtitle', 'description', 'highlight', 'meta_title', 'meta_desc', 'meta_key'], 'required'],
            [['region_id', 'language_id'], 'integer'],
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
            'region_id' => Yii::t('app', 'Region ID'),
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
     * @return \common\models\query\RegionDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RegionDescQuery(get_called_class());
    }
}
