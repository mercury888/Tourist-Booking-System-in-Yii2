<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_post_images".
 *
 * @property int $id
 * @property int $post_id
 * @property string $title
 * @property string $filename
 */
class PostImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_post_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'title', 'filename'], 'required'],
            [['post_id'], 'integer'],
            [['title', 'filename'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'post_id' => Yii::t('app', 'Post ID'),
            'title' => Yii::t('app', 'Title'),
            'filename' => Yii::t('app', 'Filename'),
        ];
    }

    public function getImageUrl(){
        return Yii::$app->urlManager->baseUrl.'/images/frontend/main/'.$this->filename;
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PostImagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PostImagesQuery(get_called_class());
    }
}
