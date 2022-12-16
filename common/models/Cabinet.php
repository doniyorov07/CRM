<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cabinet".
 *
 * @property int $id
 * @property string|null $cabinet_raqami
 * @property string|null $cabinet_id
 */
class Cabinet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cabinet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cabinet_raqami'], 'string', 'max' => 50],
            [['cabinet_id'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cabinet_raqami' => 'Kabinet raqami',
            'cabinet_id' => 'Kabinet id',
        ];
    }
}
