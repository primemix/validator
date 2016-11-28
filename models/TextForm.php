<?php

namespace app\models;

use Yii;
use yii\base\Model;

class TextForm extends Model
{
    public $text;
    public $name;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            ['text', 'string', 'length' => [4, 24]],
        ];
    }
}