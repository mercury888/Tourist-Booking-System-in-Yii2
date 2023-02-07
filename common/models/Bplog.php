<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_bplog".
 *
 * @property int $id
 * @property string $get_response
 * @property string $post_response
 * @property string $request_response
 * @property string $created_at
 */
class Bplog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_bplog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['get_response', 'post_response', 'request_response', 'created_at'], 'required'],
            [['get_response', 'post_response', 'request_response'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'get_response' => Yii::t('app', 'Get Response'),
            'post_response' => Yii::t('app', 'Post Response'),
            'request_response' => Yii::t('app', 'Request Response'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BplogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BplogQuery(get_called_class());
    }
}
