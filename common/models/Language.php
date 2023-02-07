<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_language".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $image
 * @property int $display_order
 * @property int $visible
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'image', 'display_order', 'visible'], 'required'],
            [['display_order', 'visible'], 'integer'],
            [['name', 'image'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 20],
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
            'code' => Yii::t('app', 'Code'),
            'image' => Yii::t('app', 'Image'),
            'display_order' => Yii::t('app', 'Display Order'),
            'visible' => Yii::t('app', 'Visible'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\LanguageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\LanguageQuery(get_called_class());
    }
}
