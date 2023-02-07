<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_admin".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $real_pass
 * @property string $email1
 * @property string $email2
 * @property string $email3
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'real_pass', 'email1', 'email2', 'email3'], 'required'],
            [['username', 'password', 'real_pass', 'email1', 'email2', 'email3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'real_pass' => Yii::t('app', 'Real Pass'),
            'email1' => Yii::t('app', 'Email1'),
            'email2' => Yii::t('app', 'Email2'),
            'email3' => Yii::t('app', 'Email3'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AdminQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AdminQuery(get_called_class());
    }
}
