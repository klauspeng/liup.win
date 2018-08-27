<?php

namespace backend\controllers;

class UserController extends \yii\web\Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionLoginOut()
    {
        return $this->render('login-out');
    }

}
