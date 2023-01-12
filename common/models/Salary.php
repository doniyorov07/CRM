<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "salary".
 *
 * @property int $id
 * @property int|null $worker_id
 */
class Salary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worker_id' ,'pay_percentage', 'pay_basic', 'pay_bonus', 'pay_separate', 'status', 'pay_total'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Worker ID',
            'pay_percentage' => 'Foiz %',
            'pay_basic' => 'Asosiy oylik',
            'pay_bonus' => 'Bonus',
            'pay_separate' => 'Ajratish',
            'pay_total' => 'Jami',
        ];
    }

    public function getGroups()
    {
        return $this->hasOne(Payments::className(), ['id' => 'group_id']);
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

}
