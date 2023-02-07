<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_articles".
 *
 * @property int $id
 * @property string $name
 * @property string $publish_date
 * @property string|null $date_added
 * @property string|null $date_updated
 * @property int $visible 0=>hidden(draft mode), 1=>pubish live
 * @property int $readcount
 * @property string $slug
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'publish_date', 'visible', 'readcount', 'slug'], 'required'],
            [['publish_date', 'date_added', 'date_updated'], 'safe'],
            [['visible', 'readcount'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 255],
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
            'publish_date' => Yii::t('app', 'Publish Date'),
            'date_added' => Yii::t('app', 'Date Added'),
            'date_updated' => Yii::t('app', 'Date Updated'),
            'visible' => Yii::t('app', 'Visible'),
            'readcount' => Yii::t('app', 'Readcount'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ArticlesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ArticlesQuery(get_called_class());
    }
}
