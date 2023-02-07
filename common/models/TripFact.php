<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "trip_fact".
 *
 * @property int $id
 * @property string $heading
 * @property string $icon
 * @property string $color
 * @property string $text1
 * @property string|null $text2
 * @property string|null $text3
 * @property int $package_id
 */
class TripFact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trip_fact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['heading', 'icon', 'color', 'text1', 'package_id'], 'required'],
            [['package_id'], 'integer'],
            [['heading', 'text1', 'text2', 'text3'], 'string', 'max' => 50],
            [['icon', 'color'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heading' => 'Heading',
            'icon' => 'Icon',
            'color' => 'Color',
            'text1' => 'Text1',
            'text2' => 'Text2',
            'text3' => 'Text3',
            'package_id' => 'Package ID',
        ];
    }
}
