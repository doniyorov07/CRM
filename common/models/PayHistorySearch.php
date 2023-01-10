<?php

namespace common\models;

use yii\base\Model;

/**
 * This is the model class for table "position".
 *
 * @property string|null $month
 * @property string|null $group_id
 */
class PayhistorySearch extends Model
{
    public $group_id;
    public $month;

    /**
     * @return array[]
     */
    public function rules()
    {
        return [
            [['month', 'group_id'], 'required'],
            [['group_id'], 'integer'],
            [['month'], 'string'],
        ];
    }

    public function AttributeLabels()
    {
        return [
            'group_id' => 'Guruh',
            'month' => "Oy",
        ];
    }
}