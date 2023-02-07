<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_blog_category_desc".
 *
 * @property int $id
 * @property int $category_id
 * @property int $language_id
 * @property string $title
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 */
class BlogCategoryDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_blog_category_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'language_id', 'title', 'meta_title', 'meta_desc', 'meta_key'], 'required'],
            [['category_id', 'language_id'], 'integer'],
            [['meta_desc', 'meta_key'], 'string'],
            [['title', 'meta_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'meta_key' => Yii::t('app', 'Meta Key'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BlogCategoryDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BlogCategoryDescQuery(get_called_class());
    }
}
