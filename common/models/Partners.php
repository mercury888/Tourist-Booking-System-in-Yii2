<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_partners".
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property string $link
 * @property int $visible
 * @property int $display_order
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'logo', 'link', 'visible', 'display_order'], 'required'],
            [['visible', 'display_order'], 'integer'],
            [['name', 'logo', 'link'], 'string', 'max' => 255],
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
            'logo' => Yii::t('app', 'Logo'),
            'link' => Yii::t('app', 'Link'),
            'visible' => Yii::t('app', 'Visible'),
            'display_order' => Yii::t('app', 'Display Order'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PartnersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PartnersQuery(get_called_class());
    }
}
