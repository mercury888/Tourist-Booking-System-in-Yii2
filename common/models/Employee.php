<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_employee".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $visible
 * @property int $department_id
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'image', 'visible', 'department_id'], 'required'],
            [['visible', 'department_id'], 'integer'],
            [['name', 'image'], 'string', 'max' => 255],
            ['slider_images','safe']
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
            'image' => Yii::t('app', 'Image'),
            'visible' => Yii::t('app', 'Visible'),
            'department_id' => Yii::t('app', 'Department ID'),
            'slider_images' => Yii::t('app', 'Slider Images'),
        ];
    }

    public function getImageUrl(){
        return Yii::$app->urlManager->baseUrl.'/images/frontend/main/'.$this->image;
    }

    public function getDetail(){
        return $this->hasOne(EmployeeDesc::className(),['employee_id' => 'id']);
    }

    public function getOtherImages(){
        $images = [];
        if(!empty($this->slider_images)){
            $images_data = json_decode($this->slider_images,true);
            // print_r($images_data);
            // echo $this->slider_images; exit;
            if(is_array($images_data) && !empty($images_data)){
                // echo 'I a here';
                foreach($images_data as $val){
                    $images[]  = Yii::$app->urlManager->baseUrl.'/images/ourteam/'.$val;
                }
            }
        }
        return $images;
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EmployeeQuery(get_called_class());
    }
}
