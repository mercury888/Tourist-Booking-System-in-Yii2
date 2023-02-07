<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_legal_documents".
 *
 * @property int $id
 * @property string $title
 * @property string $filename
 * @property int $type 0=>image; 1=>document
 */
class LegalDocuments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_legal_documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'filename', 'type'], 'required'],
            [['type'], 'integer'],
            [['title', 'filename'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'filename' => Yii::t('app', 'Filename'),
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\LegalDocumentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\LegalDocumentsQuery(get_called_class());
    }
}
