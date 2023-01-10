<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student_group".
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $student_id
 * @property int|null $course_id
 * @property string|null $started_at
 * @property string|null $finished_at
 * @property int|null $course_amount
 *
 * @property-read  Student $student
 */
class StudentGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'student_id', 'course_id', 'course_amount'], 'integer'],
            [['student_id', 'group_id', 'started_at'], 'required'],
            [['leson_time'], 'string'],
            [['started_at', 'finished_at', 'lesson_days'], 'safe'],
          
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Guruh nomi',
            'student_id' => 'Talaba ismi',
            'course_id' => 'Course ID',
            'started_at' => 'Guruhga qo\'shilgan vaqti' ,
            'finished_at' => 'Guruhdan chetlatilgan vaqti',
            'course_amount' => 'Kurs narxi',
            'lesson_days' => 'Dars kunlari',
            'leson_time' => 'Dars vaqti',
        ];
    }

    public function getGroup()
    {// model payments
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    public function getStudent()
    {   
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }

    public function getStudentGroups()
    {
        return $this->hasMany(StudentGroup::className(), ['group_id' => 'id']);
    }

   

}
