<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_article_file".
 *
 * @property int $id
 * @property int $article_id
 * @property string $title
 * @property string $filename
 * @property int $file_type 1=>photo,  2=>audio, 3=>video,  4=>doc
 */
class ArticleFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_article_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['article_id', 'title', 'filename', 'file_type'], 'required'],
            [['article_id', 'file_type'], 'integer'],
            [['filename'], 'string'],
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
            'article_id' => Yii::t('app', 'Article ID'),
            'title' => Yii::t('app', 'Title'),
            'filename' => Yii::t('app', 'Filename'),
            'file_type' => Yii::t('app', 'File Type'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ArticleFileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ArticleFileQuery(get_called_class());
    }
}
