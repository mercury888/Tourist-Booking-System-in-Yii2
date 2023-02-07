<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_message".
 *
 * @property int $id
 * @property string $language
 * @property string|null $translation
 *
 * @property Sourcemessage $id0
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'language'], 'required'],
            [['id'], 'integer'],
            [['translation'], 'string'],
            [['language'], 'string', 'max' => 16],
            [['id', 'language'], 'unique', 'targetAttribute' => ['id', 'language']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Sourcemessage::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'language' => Yii::t('app', 'Language'),
            'translation' => Yii::t('app', 'Translation'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Sourcemessage::className(), ['id' => 'id'])->inverseOf('messages');
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\MessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\MessageQuery(get_called_class());
    }
}
