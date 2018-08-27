<?php

namespace backend\controllers\system;

use backend\controllers\BaseController;
use common\models\system\SysConfig;

/**
 * 首页相关
 */
class ConfigController extends BaseController
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $configs = SysConfig::find()->asArray()->all();
        $configs = array_column($configs, 'value', 'key');
        return $this->render('index', ['configs' => $configs]);
    }


}
