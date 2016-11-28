<?php

namespace app\models;

use yii\base\Model;

class OthersForm extends Model
{
    public $age; // validation compare
    public $event_date; // validation date
    public $default; // validation default
    public $salary; // valid duble
    public $integerCount; // valid int
    public $email; // valid email
    public $primaryImage; // valid img file

    public function rules()
    {
        return [
            ['age', 'compare', 'compareValue' => 30, 'operator' => '>='],
            [['event_date'], 'required'],
            [['event_date'], 'date', 'format' => 'php:Y-m-d'],
            ['default', 'default', 'value' => null],
            ['salary', 'double'],
            ['integerCount', 'integer', 'min' => 0, 'max' => 5],
            ['email', 'email'],
            ['primaryImage', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 1024*1024],
        ];
    }
}