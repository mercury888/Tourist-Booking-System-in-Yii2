<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class TripFactsForm extends Model
{
    public $id;
    public $heading;
    public $icon;
    public $color;
    public $text;
    public $type;
  


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['heading', 'text','type'], 'required'],
            [['text'],'validateIcon'],
            [['text'],'validateText'],
            ['id','integer'],
            // email has to be a valid email address
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }
    
    public function validateIcon() {
        if($this->type=='trip-fact' && empty($this->icon)){
            $this->addError('icon','Icon can not be empty');
        }
        if($this->type=='trip-fact' && empty($this->color)){
            $this->addError('color','Color can not be empty');
        }
    }
    public function validateText(){
        $has_emtpy = true;
        if(empty($this->text)){
            $this->addError('text','Provide at least one text value');
        } else {
            foreach($this->text as $key=>$val){
                if(!empty($val)){
                    $has_emtpy = false; break;
                }
            }
            if($has_emtpy){
                $this->addError('text','Provide at least one text value');
            }
        }
    }

    
}
