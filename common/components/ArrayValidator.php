<?php 
namespace common\components;

use yii\validators\Validator;

class ArrayValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if (empty($model->$attribute)) {
            $this->addError($model, $attribute, 'At least provide one text input value');
        }
    }
}