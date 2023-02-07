<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_destination".
 *
 * @property int $id
 * @property string $name
 * @property int $visible
 * @property string $image
 * @property string $bg_image background image
 * @property int $display_order
 * @property string $slug
 */
class Destination extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_destination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'visible', 'image', 'bg_image', 'display_order', 'slug'], 'required'],
            [['visible', 'display_order'], 'integer'],
            [['name', 'image', 'bg_image', 'slug'], 'string', 'max' => 255],
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
            'visible' => Yii::t('app', 'Visible'),
            'image' => Yii::t('app', 'Image'),
            'bg_image' => Yii::t('app', 'Bg Image'),
            'display_order' => Yii::t('app', 'Display Order'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    public function getCountPackage(){
        $sql = "select count(id) as package_count from {{%package}} where destination_id=".$this->id;
        return Yii::$app->db->createCommand($sql)->queryScalar();
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DestinationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DestinationQuery(get_called_class());
    }
}
