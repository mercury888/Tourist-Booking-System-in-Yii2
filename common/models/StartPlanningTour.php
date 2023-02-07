<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "start_planning_tour".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property int|null $package_id
 * @property string $desired_depature_date
 * @property string $desired_duration
 * @property int $adult_guest_no
 * @property int|null $children_no
 * @property string $celebrting_special_occasion
 * @property string $message
 * @property int $how_did_you_hear_about_us
 * @property int $are_you_working_with_travel_agent
 * @property int $newsletter_signup
 * @property int $create_time
 * @property int $update_time
 * @property int $status
 * @property string $phone
 */
class StartPlanningTour extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'create_time',
                'updatedAtAttribute' => 'update_time',
                'value' => time(),
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'start_planning_tour';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'address', 'desired_depature_date', 'desired_duration', 'adult_guest_no', 'celebrting_special_occasion', 'message', 'how_did_you_hear_about_us', 'are_you_working_with_travel_agent', 'newsletter_signup', 'phone'], 'required'],
            [['package_id', 'adult_guest_no', 'children_no', 'how_did_you_hear_about_us', 'are_you_working_with_travel_agent', 'newsletter_signup', 'create_time', 'update_time', 'status'], 'integer'],
            [['desired_depature_date'], 'safe'],
            [['message'], 'string'],
            [['first_name', 'last_name', 'email', 'desired_duration'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 250],
            [['celebrting_special_occasion'], 'string', 'max' => 3],
            [['phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'address' => 'Address',
            'package_id' => 'Package ID',
            'desired_depature_date' => 'Desired Depature Date',
            'desired_duration' => 'Desired Duration',
            'adult_guest_no' => 'Adult Guest No',
            'children_no' => 'Children No',
            'celebrting_special_occasion' => 'Celebrting Special Occasion',
            'message' => 'Message',
            'how_did_you_hear_about_us' => 'How Did You Hear About Us',
            'are_you_working_with_travel_agent' => 'Are You Working With Travel Agent',
            'newsletter_signup' => 'Newsletter Signup',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'status' => 'Status',
            'phone' => 'Phone',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\StartPlanningTourQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\StartPlanningTourQuery(get_called_class());
    }
}
