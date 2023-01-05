<?php

namespace common\models;

use yii\base\Model;

class TestSearch extends Model
{
    public $full_name;

    /**
     * @return array[]
     */
    public function rules()
    {
        return [
            [['full_name'], 'required'],
            [['full_name'], 'string']
        ];
    }
}