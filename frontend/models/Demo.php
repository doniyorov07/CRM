<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "demo".
 *
 * @property int $id
 * @property string|null $edu_name
 * @property string|null $name
 * @property int|null $number
 * @property int|null $reCaptcha
 * @property string|null recaptcha
 */

class Demo extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'demo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number'], 'integer'],
            [['edu_name', 'name', 'captcha'], 'string', 'max' => 255],
            [['number', 'edu_name', 'name'], 'required', 'message' => '{attribute} bo\'sh bo\'lmasligi kerak']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'edu_name' => 'O\'quv markazi nomi',
            'name' => 'Ismingiz',
            'number' => 'Raqamingiz',
            'captcha' => 'Captcha',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DemoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DemoQuery(get_called_class());
    }

    public function sendEmail()
    {
        return Yii::$app
            ->mailer
            ->compose()
            ->setTextBody('dsads')
            ->setHtmlBody('<p>Salom</p>')
            ->setFrom(['doniyorovrozimurod1@gmail.com' =>  'robot'])
            ->setTo('doniyorovmirzohid75@gmail.com')
            ->setSubject($this->edu_name . $this->name . $this->number)
            ->send();
    }
}
