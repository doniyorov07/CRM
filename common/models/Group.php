<?php

namespace common\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $status
 * @property int|null $updated_by
 */
class Group extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_days'], 'safe'],
            [['created_at', 'updated_at', 'created_by', 'status', 'updated_by', 'course_amount'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['lesson_time'], 'string', 'max' => 255],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Guruh nomi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'status' => 'Holati',
            'updated_by' => 'Updated By',
            'course_amount' => 'Kurs narxi',
            'lesson_days' => "Dars kunlari",
            'lesson_time' => 'Dars vaqti',
        ];
    }

    public function behaviors()
    {
    return [
        TimestampBehavior::class,
        BlameableBehavior::class,
    ];
    }



}
