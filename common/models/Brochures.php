<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_brochures".
 *
 * @property int $id
 * @property int $package_id
 * @property string $title
 * @property string $filename
 */
class Brochures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_brochures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'title', 'filename'], 'required'],
            [['package_id'], 'integer'],
            [['title', 'filename'], 'string', 'max' => 255],
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
            'title' => Yii::t('app', 'Title'),
            'filename' => Yii::t('app', 'Filename'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BrochuresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BrochuresQuery(get_called_class());
    }
}
