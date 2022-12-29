<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $ism
 * @property string $familiya
 * @property string|null $qabul_sanasi
 * @property int $raqami
 * @property string|null $dars_boshlanishi
 * @property string|null $dars_kuni
 * @property string|null $jinsi
 * @property int|null $yosh
 * @property string|null $guruxi
 * @property string|null $oqitish_tili
 * @property string|null $yonalishi
 * @property int|null $status
 *
 * @property-read  StudentGroup $studentGroups
 * @property-read  StudentGroup $paymentGroups
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ism', 'familiya', 'raqami'], 'required', 'message' => '{attribute} bo\'sh bo\'lishi mumkin emas '],
            [['qabul_sanasi'], 'safe'],
            [['raqami', 'yosh', 'status', 'created_at', 'updated_at'], 'integer'],
            [['ism', 'familiya', 'dars_boshlanishi', 'dars_kuni', 'oqitish_tili', 'yonalishi'], 'string', 'max' => 255],
            [['jinsi'], 'string', 'max' => 10],
            [['guruxi'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ism' => 'Ismi',
            'familiya' => 'Familiyasi',
            'qabul_sanasi' => 'Markazga kelgan sana',
            'raqami' => 'Telefon raqami',
            'dars_boshlanishi' => 'Dars boshlanish vaqti',
            'dars_kuni' => 'Dars kunlari',
            'jinsi' => 'Jinsi',
            'yosh' => 'Yoshi',
            'guruxi' => 'Guruhi',
            'oqitish_tili' => 'O\'qitish tili',
            'yonalishi' => 'Yo\'nalishi',
            'status' => 'Holati',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at
',
        ];
    }

    public function behaviors()
    {
    return [
        TimestampBehavior::class,
           ];
    }

    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getStudentGroups()
    {
        return $this->hasMany(StudentGroup::class, ['student_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getPaymentGroups()
    {
        return $this->hasMany(Payments::className(), ['student_id' => 'id']);
    }

    

    
}
