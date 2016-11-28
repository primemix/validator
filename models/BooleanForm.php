<?php

namespace app\models;

use yii\base\Model;

class BooleanForm extends Model
{
    public $select;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            ['select', 'boolean', 'trueValue' => true, 'falseValue' => false, 'strict' => true],
            
        ];
    }
}