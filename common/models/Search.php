<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "search".
 *
 * @property int $id
 * @property string|null $month
 * @property string|null $name
 * @property string|null $decreption
 */
class Search extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'search';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['month', 'name', 'decreption'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'month' => 'Oy',
            'name' => 'Name',
            'decreption' => 'Decreption',
        ];
    }
}
