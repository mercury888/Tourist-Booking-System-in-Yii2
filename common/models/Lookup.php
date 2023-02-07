<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_lookup".
 *
 * @property int $id
 * @property string $name
 * @property int $code
 * @property string $type
 * @property int $position
 */
class Lookup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_lookup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'type', 'position'], 'required'],
            [['code', 'position'], 'integer'],
            [['name', 'type'], 'string', 'max' => 255],
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
            'type' => Yii::t('app', 'Type'),
            'position' => Yii::t('app', 'Position'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\LookupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\LookupQuery(get_called_class());
    }
}
