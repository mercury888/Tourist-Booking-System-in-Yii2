<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_comment".
 *
 * @property int $id
 * @property string $content
 * @property int $status
 * @property int|null $create_time
 * @property string $author
 * @property string $email
 * @property string|null $url
 * @property int $author_id
 * @property int $post_id
 * @property int $posted_to_facebook 0=>not posted; 1=>posted
 * @property int $allow_fb_post 0=>dont publish; 1=>publish
 *
 * @property Post $post
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'status', 'author', 'email', 'author_id', 'post_id', 'posted_to_facebook', 'allow_fb_post'], 'required'],
            [['content'], 'string'],
            [['status', 'create_time', 'author_id', 'post_id', 'posted_to_facebook', 'allow_fb_post'], 'integer'],
            [['author', 'email', 'url'], 'string', 'max' => 255],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'content' => Yii::t('app', 'Content'),
            'status' => Yii::t('app', 'Status'),
            'create_time' => Yii::t('app', 'Create Time'),
            'author' => Yii::t('app', 'Author'),
            'email' => Yii::t('app', 'Email'),
            'url' => Yii::t('app', 'Url'),
            'author_id' => Yii::t('app', 'Author ID'),
            'post_id' => Yii::t('app', 'Post ID'),
            'posted_to_facebook' => Yii::t('app', 'Posted To Facebook'),
            'allow_fb_post' => Yii::t('app', 'Allow Fb Post'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id'])->inverseOf('comments');
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CommentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CommentQuery(get_called_class());
    }
}
