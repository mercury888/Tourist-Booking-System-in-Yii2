<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "go_private".
 *
 * @property int $id
 * @property int $package_id
 * @property string $title
 * @property string $detail
 * @property string $image
 */
class GoPrivate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'go_private';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'title', 'detail', 'image'], 'required'],
            [['package_id'], 'integer'],
            [['detail'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['image'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'package_id' => 'Package ID',
            'title' => 'Title',
            'detail' => 'Detail',
            'image' => 'Image',
        ];
    }
}
