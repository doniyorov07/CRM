<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property string|null $edu_name
 * @property string|null $edu_location
 * @property int|null $edu_number
 * @property string|null $edu_email
 * @property string|null $image
 * @property int|null $status
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['edu_number', 'status'], 'integer'],
            [['edu_name', 'edu_location', 'edu_email', 'image'], 'string', 'max' => 255],
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
            'edu_location' => 'O\'quv markazi manzili',
            'edu_number' => 'O\'quv markazi raqami',
            'edu_email' => 'O\'quv markazi emaili',
            'image' => 'O\'quv markazi logotipi',
            'status' => 'Holati',
        ];
    }
}
