<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_footer_pictures".
 *
 * @property int $id
 * @property string $image
 * @property string $caption
 * @property string $link
 * @property int $visible
 * @property int $display_order
 */
class FooterPictures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_footer_pictures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'caption', 'link', 'visible', 'display_order'], 'required'],
            [['visible', 'display_order'], 'integer'],
            [['image', 'caption', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'caption' => Yii::t('app', 'Caption'),
            'link' => Yii::t('app', 'Link'),
            'visible' => Yii::t('app', 'Visible'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FooterPicturesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FooterPicturesQuery(get_called_class());
    }
}
