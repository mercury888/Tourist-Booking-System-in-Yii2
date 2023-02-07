<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_article_desc".
 *
 * @property int $id
 * @property int $article_id
 * @property int $language_id
 * @property string $title
 * @property string $detail
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 */
class ArticleDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_article_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['article_id', 'language_id', 'title', 'detail', 'meta_title', 'meta_desc', 'meta_key'], 'required'],
            [['article_id', 'language_id'], 'integer'],
            [['detail'], 'string'],
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
            'article_id' => Yii::t('app', 'Article ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'detail' => Yii::t('app', 'Detail'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'meta_key' => Yii::t('app', 'Meta Key'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ArticleDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ArticleDescQuery(get_called_class());
    }
}
