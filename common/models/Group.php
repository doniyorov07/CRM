<?php

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use Yii;
use yii\db\ActiveQuery;

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
 *
 * @property-read  StudentGroup $groupStudents
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
            [['name', 'lesson_time', 'course_amount', 'lesson_days'], 'required'],
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

    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getGroupStudents()
    {
        return $this->hasMany(StudentGroup::class, ['group_id' => 'id']);
    }

    public function getGroupWorkers()
    {
        return $this->hasMany(GroupLeader::class, ['group_id' => 'id']);
    }


}
