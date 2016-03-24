<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "liuyan".
 *
 * @property integer $l_id
 * @property string $l_name
 */
class Liuyan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'liuyan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['l_name'], 'string', 'max' => 90]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'l_id' => 'L ID',
            'l_name' => 'L Name',
        ];
    }
}
