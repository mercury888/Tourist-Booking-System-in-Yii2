<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_content".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $slug
 * @property int $display_order
 * @property int $date_updated
 * @property int $display_form 0=>dont display form; 1=> display form
 * @property int $visible 0=>not visible; 1=> visible
 * @property int $display_map
 * @property string $google_map
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'name', 'slug', 'display_order', 'date_updated', 'display_form', 'visible', 'display_map', 'google_map'], 'required'],
            [['parent_id', 'display_order', 'date_updated', 'display_form', 'visible', 'display_map'], 'integer'],
            [['google_map'], 'string'],
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
            'parent_id' => Yii::t('app', 'Parent ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'display_order' => Yii::t('app', 'Display Order'),
            'date_updated' => Yii::t('app', 'Date Updated'),
            'display_form' => Yii::t('app', 'Display Form'),
            'visible' => Yii::t('app', 'Visible'),
            'display_map' => Yii::t('app', 'Display Map'),
            'google_map' => Yii::t('app', 'Google Map'),
        ];
    }

    public function getContentDesc(){
        return $this->hasOne(ContentDesc::className(),['content_id'=>'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ContentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ContentQuery(get_called_class());
    }
}
