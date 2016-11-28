<?php

namespace app\controllers;

use Yii;
use app\models\BooleanForm;
use app\models\TextForm;
use app\models\Captcha;
use app\models\OthersForm;

class ValidatorController extends AppController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $model = new TextForm();
        
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * @return string
     */
    public function actionBoolean()
    {
        $model = new BooleanForm();
        
        return $this->render('boolean', [
            'model' => $model,
        ]);
    }

    /**
     * @return string
     */
    public function actionCaptcha()
    {
        $model = new Captcha();

        return $this->render('captcha', [
            'model' => $model
        ]);

    }

    /**
     * @return string
     */
    public function actionOthers()
    {
        $model = new OthersForm;
        
        return $this->render('others', [
            'model' => $model
        ]);
    }
}