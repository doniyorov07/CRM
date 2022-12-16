<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "group_leader".
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $worker_id
 * @property string|null $group_name
 * @property string|null $wroker_name
 */
class GroupLeader extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_leader';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'worker_id'], 'integer'],
            [['group_name', 'wroker_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Guruh',
            'worker_id' => 'Guruh rahbari ',
            'group_name' => 'Group Name',
            'wroker_name' => 'Wroker Name',
        ];
    }

    public function getGroup()
    {   
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }
 

   
}
