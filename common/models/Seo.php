<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_seo".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $slug
 * @property string $updated
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_seo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title', 'description', 'keywords', 'slug', 'updated'], 'required'],
            [['description', 'keywords'], 'string'],
            [['updated'], 'safe'],
            [['name', 'title', 'slug'], 'string', 'max' => 255],
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
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'keywords' => Yii::t('app', 'Keywords'),
            'slug' => Yii::t('app', 'Slug'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SeoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SeoQuery(get_called_class());
    }
}
