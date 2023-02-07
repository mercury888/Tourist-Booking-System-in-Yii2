<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_insurance_company".
 *
 * @property int $id
 * @property string $name
 * @property string $policy_no
 * @property string $skype_id
 * @property string $fax
 * @property string $email
 */
class InsuranceCompany extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_insurance_company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'policy_no', 'skype_id', 'fax', 'email'], 'required'],
            [['name', 'policy_no', 'skype_id', 'fax', 'email'], 'string', 'max' => 255],
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
            'policy_no' => Yii::t('app', 'Policy No'),
            'skype_id' => Yii::t('app', 'Skype ID'),
            'fax' => Yii::t('app', 'Fax'),
            'email' => Yii::t('app', 'Email'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\InsuranceCompanyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\InsuranceCompanyQuery(get_called_class());
    }
}
