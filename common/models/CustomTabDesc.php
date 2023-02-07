<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_custom_tab_desc".
 *
 * @property int $id
 * @property int $tab_id
 * @property int $language_id
 * @property string $title
 * @property string $description
 */
class CustomTabDesc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_custom_tab_desc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tab_id', 'language_id', 'title', 'description'], 'required'],
            [['tab_id', 'language_id'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tab_id' => Yii::t('app', 'Tab ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CustomTabDescQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CustomTabDescQuery(get_called_class());
    }
}
