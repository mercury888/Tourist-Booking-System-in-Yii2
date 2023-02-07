<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_blog_category".
 *
 * @property int $id
 * @property string $name
 * @property int $display_order
 * @property string $slug
 */
class BlogCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_blog_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'display_order', 'slug'], 'required'],
            [['display_order'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'display_order' => Yii::t('app', 'Display Order'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    public function getBlogCount(){
        $sql = "select count(id) from {{%post}} where category_id=".$this->id;
        return Yii::$app->db->createCommand($sql)->queryScalar();
    }

    public function getCatDesc(){
        return $this->hasOne(BlogCategoryDesc::className(),['category_id'=>'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BlogCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BlogCategoryQuery(get_called_class());
    }
}
