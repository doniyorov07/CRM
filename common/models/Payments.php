<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $date_of_lesson
 * @property int|null $discount
 * @property int|null $debt
 * @property string|null $month
 * @property string|null $group
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_date'], 'safe'],
            [['payment_amount', 'debt', 'group_id', 'student_id', 'status'], 'integer'],
            [['name', 'month', 'group'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Talaba FISH',
            'payment_date' => 'To\'lov sanasi',
            'payment_amount' => 'Kurs narxi',
            'debt' => 'Qarz',
            'month' => 'Oy',
            'group' => 'Guruh',
        ];
    }

}
