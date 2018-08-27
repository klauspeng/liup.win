<?php

namespace backend\controllers;

/**
 * 首页相关
 */
class IndexController extends BaseController
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }



}
