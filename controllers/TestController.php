<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\Product;

class TestController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index', [
            'test' => Yii::$app->test->run()
        ]);
    }
}