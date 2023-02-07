<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_migration".
 *
 * @property string $version
 * @property int|null $apply_time
 */
class Migration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_migration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['version'], 'required'],
            [['apply_time'], 'integer'],
            [['version'], 'string', 'max' => 180],
            [['version'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'version' => Yii::t('app', 'Version'),
            'apply_time' => Yii::t('app', 'Apply Time'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\MigrationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\MigrationQuery(get_called_class());
    }
}
