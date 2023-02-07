<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_region".
 *
 * @property int $id
 * @property int $destination_id
 * @property string $name
 * @property string $image
 * @property string $bg_image background image
 * @property int $visible
 * @property string $slug
 * @property int $show_on_menu 0=no, 1=yes
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['destination_id', 'name', 'image', 'bg_image', 'visible', 'slug'], 'required'],
            [['destination_id', 'visible', 'show_on_menu'], 'integer'],
            [['name', 'image', 'bg_image', 'slug'], 'string', 'max' => 255],
        ];
    }

    public function getCountPackage(){
        $sql = "select count(id) as package_count from {{%package}} where region_id=".$this->id;
        return Yii::$app->db->createCommand($sql)->queryScalar();
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'destination_id' => Yii::t('app', 'Destination ID'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
            'bg_image' => Yii::t('app', 'Bg Image'),
            'visible' => Yii::t('app', 'Visible'),
            'slug' => Yii::t('app', 'Slug'),
            'show_on_menu' => Yii::t('app', 'Show On Menu'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\RegionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RegionQuery(get_called_class());
    }
}
