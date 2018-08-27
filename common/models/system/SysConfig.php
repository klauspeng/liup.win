<?php

namespace common\models\system;

use Yii;

/**
 * This is the model class for table "sys_config".
 *
 * @property string $key
 * @property string $value
 */
class SysConfig extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sys_config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'value'], 'required'],
            [['key'], 'string', 'max' => 50],
            [['value'], 'string', 'max' => 255],
            [['key'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'key' => 'Key',
            'value' => 'Value',
        ];
    }
}
