<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_post".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $content
 * @property string|null $tags
 * @property int $status
 * @property int|null $create_time
 * @property int|null $update_time
 * @property int $author_id >0 : user; -1 : admin
 * @property string $slug
 * @property int $posted_to_facebook 0=> not posted yet; 1=> already posted
 * @property int $allow_fb_post 0=>dont publish; 1=>publish
 * @property int $is_approved 0=>not approved; 1=> approved
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 *
 * @property Comment[] $comments
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'content', 'status', 'author_id', 'slug', 'posted_to_facebook', 'allow_fb_post', 'is_approved', 'meta_title', 'meta_desc', 'meta_key'], 'required'],
            [['category_id', 'status', 'create_time', 'update_time', 'author_id', 'posted_to_facebook', 'allow_fb_post', 'is_approved'], 'integer'],
            [['content', 'tags', 'meta_key'], 'string'],
            [['title', 'slug', 'meta_title', 'meta_desc'], 'string', 'max' => 255],
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
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
            'tags' => Yii::t('app', 'Tags'),
            'status' => Yii::t('app', 'Status'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
            'author_id' => Yii::t('app', 'Author ID'),
            'slug' => Yii::t('app', 'Slug'),
            'posted_to_facebook' => Yii::t('app', 'Posted To Facebook'),
            'allow_fb_post' => Yii::t('app', 'Allow Fb Post'),
            'is_approved' => Yii::t('app', 'Is Approved'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'meta_key' => Yii::t('app', 'Meta Key'),
        ];
    }

    public function getCategory(){
        return $this->hasOne(BlogCategory::className(),['id'=>'category_id']);
    }

    public function getPostImage(){
        return $this->hasOne(PostImages::className(),['post_id'=>'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['post_id' => 'id'])->inverseOf('post');
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PostQuery(get_called_class());
    }
}
