<?php

namespace common\models;
    
use yii\base\Model;
use yii\web\UploadedFile;
use app\models\UploadForm;
use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property int $id
 * @property string|null $ismi
 * @property string|null $familiya
 * @property string|null $shartnoma_muddati
 * @property string|null $lavozim
 * @property string|null $qabul_sanasi
 * @property string|null $tugilgan_yil
 * @property string|null $raqam
 * @property string|null $staj
 * @property int|null $status
 * @property string|null $oqitish_tili
 * @property string|null $image
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shartnoma_muddati', 'qabul_sanasi', 'tugilgan_yil'], 'safe'],
            [['status'], 'integer'],
            [['ismi', 'familiya', 'raqam', 'qabul_sanasi', 'tugilgan_yili', 'staj', 'lavozim', 'oqitish_tili', 'image'], 'required'],
            [['ismi', 'familiya', 'staj'], 'string', 'max' => 20],
            [['lavozim'], 'string', 'max' => 30],
            [['raqam'], 'string', 'max' => 25],
            [['oqitish_tili', 'image'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg, JPG, webp', 'maxSize' => 3*(1024*1024)],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ismi' => 'Ismi',
            'familiya' => 'Familiyasi',
            'shartnoma_muddati' => 'Shartnoma muddati',
            'lavozim' => 'Lavozimi',
            'qabul_sanasi' => 'Ishga kirgan sanasi',
            'tugilgan_yil' => 'Tugilgan yili',
            'raqam' => 'Telefon raqami',
            'staj' => 'Ish tajribasi',
            'status' => 'Holati',
            'oqitish_tili' => 'Dars o\'tish tili',
            'image' => 'Xodim rasmi',
        ];
    }

      public function uploadImg($oldImage = null)
    {
        
         $this->image = UploadedFile::getInstance($this, 'image');
        if (isset($this->image)) {
             $this->image->saveAs('@backend/web/worker/' . $this->image->baseName . '.' . $this->image->extension);
        $this->image = $this->image->baseName.'.'.$this->image->extension;
        }else{
         $this->image = $oldImage;            
        }
       
    }

    public function getWorkerGroups()
    {
        return $this->hasMany(GroupLeader::className(), ['worker_id' => 'id']);
    }

    public function getStudentGroups()
    {
        return $this->hasMany(StudentGroup::className(), ['student_id' => 'id']);
    }

    public function getPayments()
    {
        return $this->hasMany(Salary::className(), ['worker_id' => 'id']);
    }







}
