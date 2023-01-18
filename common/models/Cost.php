<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cost".
 *
 * @property int $id
 * @property string|null $cost_name
 * @property string|null $date
 * @property string|null $cost_reason
 * @property int|null $cost_price
 * @property string|null $descreption
 */
class Cost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cost';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['cost_price'], 'integer'],
            [['cost_name', 'cost_reason'], 'string', 'max' => 255],
            [['descreption'], 'string', 'max' => 500],
            [['date', 'cost_price', 'cost_name', 'cost_reason', 'descreption'], 'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cost_name' => 'Chiqim nomi',
            'date' => 'Sana',
            'cost_reason' => 'Chiqim sababi',
            'cost_price' => 'Narxi *',
            'descreption' => 'Tasnif',
        ];
    }
}
