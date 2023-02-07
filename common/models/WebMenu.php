<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_web_menu".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property int $type
 * @property string $slug
 * @property int $status
 * @property int|null $display_order
 */
class WebMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_web_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type', 'slug', 'status'], 'required'],
            [['parent_id', 'type', 'status', 'display_order'], 'integer'],
            [['name'], 'string', 'max' => 150],
            [['slug'], 'string', 'max' => 250],
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
            'parent_id' => Yii::t('app', 'Parent ID'),
            'type' => Yii::t('app', 'Type'),
            'slug' => Yii::t('app', 'Slug'),
            'status' => Yii::t('app', 'Status'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\WebMenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\WebMenuQuery(get_called_class());
    }
}
