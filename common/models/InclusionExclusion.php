<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inclusion_exclusion".
 *
 * @property int $id
 * @property string $type
 * @property string $title
 * @property string $detail
 * @property int $package_id
 */
class InclusionExclusion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inclusion_exclusion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type', 'title', 'detail', 'package_id'], 'required'],
            [['id', 'package_id'], 'integer'],
            [['detail'], 'string'],
            [['type'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'title' => 'Title',
            'detail' => 'Detail',
            'package_id' => 'Package ID',
        ];
    }
}
