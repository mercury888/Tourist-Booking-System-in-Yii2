<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_user_old".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $password
 * @property string $real_pass
 * @property string $email
 * @property string|null $profile
 * @property int $facebook_user_id
 * @property string $facebook_access_token
 * @property string $permissions
 * @property string $created_date
 */
class UserOld extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_user_old';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username', 'password', 'real_pass', 'email', 'facebook_user_id', 'facebook_access_token', 'permissions', 'created_date'], 'required'],
            [['profile', 'facebook_access_token'], 'string'],
            [['facebook_user_id'], 'integer'],
            [['created_date'], 'safe'],
            [['first_name', 'last_name', 'username', 'password', 'real_pass', 'email', 'permissions'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'real_pass' => Yii::t('app', 'Real Pass'),
            'email' => Yii::t('app', 'Email'),
            'profile' => Yii::t('app', 'Profile'),
            'facebook_user_id' => Yii::t('app', 'Facebook User ID'),
            'facebook_access_token' => Yii::t('app', 'Facebook Access Token'),
            'permissions' => Yii::t('app', 'Permissions'),
            'created_date' => Yii::t('app', 'Created Date'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\UserOldQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\UserOldQuery(get_called_class());
    }
}
