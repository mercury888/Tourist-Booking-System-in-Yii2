<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "media".
 *
 * @property int $id
 * @property int $package_id
 * @property string $image
 * @property string $type
 */
class Media extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'media';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'image', 'type'], 'required'],
            [['package_id'], 'integer'],
            [['image'], 'string', 'max' => 250],
            [['type'], 'string', 'max' => 20],
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
            'image' => 'Image',
            'type' => 'Type',
        ];
    }
}
