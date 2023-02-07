<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_setting".
 *
 * @property int $id
 * @property string $option_name
 * @property string $value
 * @property string $slug
 * @property int $is_permanent
 * @property string|null $type
 * @property string $comment
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['option_name', 'value', 'slug', 'is_permanent', 'comment'], 'required'],
            [['value', 'comment'], 'string'],
            [['is_permanent'], 'integer'],
            [['option_name', 'slug', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'option_name' => Yii::t('app', 'Option Name'),
            'value' => Yii::t('app', 'Value'),
            'slug' => Yii::t('app', 'Slug'),
            'is_permanent' => Yii::t('app', 'Is Permanent'),
            'type' => Yii::t('app', 'Type'),
            'comment' => Yii::t('app', 'Comment'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SettingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SettingQuery(get_called_class());
    }
}
