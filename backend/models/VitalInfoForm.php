<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class VitalInfoForm extends Model
{
    public $id;
    public $title;
    public $tab_name;
    public $detail;
  


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['title', 'tab_name','detail'], 'required'],
            // [['item'],'validateText'],
            ['id','integer'],
            // email has to be a valid email address
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }
    
   
    // public function validateText(){
    //     $has_emtpy = true;
    //     if(empty($this->item)){
    //         $this->addError('item','Provide at least one text value');
    //     } else {
    //         foreach($this->item as $key=>$val){
    //             if(!empty($val)){
    //                 $has_emtpy = false; break;
    //             }
    //         }
    //         if($has_emtpy){
    //             $this->addError('item','Provide at least one text value');
    //         }
    //     }
    // }

    
}
