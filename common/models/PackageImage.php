<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_package_image".
 *
 * @property int $id
 * @property int $package_id
 * @property string $filename
 * @property string $caption
 */
class PackageImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_package_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'filename', 'caption'], 'required'],
            [['package_id'], 'integer'],
            [['filename', 'caption'], 'string', 'max' => 255],
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
            'filename' => Yii::t('app', 'Filename'),
            'caption' => Yii::t('app', 'Caption'),
        ];
    }

    public function getImageUrl(){
        return Yii::$app->urlManager->baseUrl.'/images/frontend/full/'.$this->filename;
    }
    /**
     * {@inheritdoc}
     * @return \common\models\query\PackageImageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PackageImageQuery(get_called_class());
    }
}
