<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-08-23
 * Time: 16:29
 */

namespace common\models\site;

use yii\db\ActiveRecord;

class Menu extends ActiveRecord
{
    public static function tableName()
    {
        return '{{menu}}';
    }
}