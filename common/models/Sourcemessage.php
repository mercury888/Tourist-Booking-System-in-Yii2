<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_sourcemessage".
 *
 * @property int $id
 * @property string|null $category
 * @property string|null $message
 *
 * @property Message[] $messages
 */
class Sourcemessage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_sourcemessage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['category'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category' => Yii::t('app', 'Category'),
            'message' => Yii::t('app', 'Message'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Message::className(), ['id' => 'id'])->inverseOf('id0');
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SourcemessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SourcemessageQuery(get_called_class());
    }
}
