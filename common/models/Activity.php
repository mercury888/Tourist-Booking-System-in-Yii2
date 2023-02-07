<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_activity".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $bg_image background image
 * @property string $logo
 * @property int $visible
 * @property string $slug
 * @property int $display_order
 * @property int $show_on_menu 0=no, 1=yes
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'image', 'bg_image', 'logo', 'visible', 'slug', 'display_order'], 'required'],
            [['visible', 'display_order', 'show_on_menu'], 'integer'],
            [['name', 'image', 'bg_image', 'logo', 'slug'], 'string', 'max' => 255],
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
            'image' => Yii::t('app', 'Image'),
            'bg_image' => Yii::t('app', 'Bg Image'),
            'logo' => Yii::t('app', 'Logo'),
            'visible' => Yii::t('app', 'Visible'),
            'slug' => Yii::t('app', 'Slug'),
            'display_order' => Yii::t('app', 'Display Order'),
            'show_on_menu' => Yii::t('app', 'Show On Menu'),
        ];
    }

    public function getCountPackage(){
        $sql = "select count(id) as package_count from {{%package}} where activity_id=".$this->id;
        return Yii::$app->db->createCommand($sql)->queryScalar();
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActivityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActivityQuery(get_called_class());
    }
}
