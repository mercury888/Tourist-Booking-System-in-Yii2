<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_countries".
 *
 * @property int $id
 * @property string $country_code
 * @property string $country_name
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_code'], 'string', 'max' => 2],
            [['country_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_code' => Yii::t('app', 'Country Code'),
            'country_name' => Yii::t('app', 'Country Name'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CountriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CountriesQuery(get_called_class());
    }
}
