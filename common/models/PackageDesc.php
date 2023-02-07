<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_package_desc".
 *
 * @property int $id
 * @property int $package_id
 * @property int $language_id
 * @property string $title
 * @property string $description
 * @property string $itinerary
 * @property string $cost_detail
 * @property string $cost_excludes
 * @property string $equipments
 * @property string $accomodation
 * @property string $info
 * @property string $group_size
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 */
class PackageDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_package_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'group_size'], 'required'],
            // [['package_id', 'language_id', 'title', 'description', 'itinerary', 'cost_detail', 'cost_excludes', 'equipments', 'accomodation', 'info', 'group_size', 'meta_title', 'meta_desc', 'meta_key'], 'required'],
            [['package_id', 'language_id'], 'integer'],
            [['description', 'itinerary', 'cost_detail', 'cost_excludes', 'equipments', 'accomodation', 'info'], 'string'],
            [['title', 'group_size', 'meta_title', 'meta_desc', 'meta_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'package_id' => Yii::t('app', 'Package ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'itinerary' => Yii::t('app', 'Itinerary'),
            'cost_detail' => Yii::t('app', 'Cost Detail'),
            'cost_excludes' => Yii::t('app', 'Cost Excludes'),
            'equipments' => Yii::t('app', 'Equipments'),
            'accomodation' => Yii::t('app', 'Accomodation'),
            'info' => Yii::t('app', 'Info'),
            'group_size' => Yii::t('app', 'Group Size'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'meta_key' => Yii::t('app', 'Meta Key'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PackageDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PackageDescQuery(get_called_class());
    }
}
