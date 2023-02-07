<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_video".
 *
 * @property int $id
 * @property int $package_id
 * @property string $title
 * @property string $videocode
 * @property int $visible
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['package_id', 'title', 'videocode'], 'required'],
            [['package_id', 'visible'], 'integer'],
            [['videocode'], 'string'],
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
            'package_id' => Yii::t('app', 'Package ID'),
            'title' => Yii::t('app', 'Title'),
            'videocode' => Yii::t('app', 'Videocode'),
            'visible' => Yii::t('app', 'Visible'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\VideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\VideoQuery(get_called_class());
    }
}
