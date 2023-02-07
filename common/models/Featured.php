<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_featured".
 *
 * @property int $id
 * @property string $name
 * @property string $note
 * @property int $max_count
 */
class Featured extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_featured';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'note', 'max_count'], 'required'],
            [['note'], 'string'],
            [['max_count'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'note' => Yii::t('app', 'Note'),
            'max_count' => Yii::t('app', 'Max Count'),
        ];
    }

    public function getCountPackage(){
        $sql = "select count(id) as package_count from {{%featured_items}} where id=".$this->id;
        return Yii::$app->db->createCommand($sql)->queryScalar();
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FeaturedQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FeaturedQuery(get_called_class());
    }
}
