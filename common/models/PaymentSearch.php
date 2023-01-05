<?php

namespace common\models;

use yii\base\Model;

/**
 * This is the model class for table "position".
 *
 * @property string|null $month
 * @property string|null $ismi
 * @property string|null $familya
 */
class PaymentSearch extends Model
{

    public $worker_id;
    public $group;
    public $groupleader;
    public $month;
    public $ismi;
    public $familiya;

    /**
     * @return array[]
     */
    public function rules()
    {
        return [
            [['month', 'worker_id'], 'required'],
            [['worker_id', 'group','groupleader'], 'integer'],
            [['month', 'ismi', 'familiya'], 'string'],
        ];
    }

    public function AttributeLabels()
    {
        return [
            'ismi' => 'Xodim FISH',
            'worker_id' => 'Xodim id',
            'group_id' => 'Guruh id',
            'familiya' => "Xodim FISH",
            'month' => "Oy",
        ];
    }
}