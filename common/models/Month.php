<?php

namespace common\models;

use Yii;


class Month extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'month';
    }

    public  function rules()
    {
        return [
            [['month_name'], 'string'=>max(255)],
        ];
    }

    public function attributeLabels()
    {
        return [
        'id' => 'ID',
        'month_name' => 'Oy nomi',
        ];
    }
}