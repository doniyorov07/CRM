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
 * @property-read Worker $worker
 * @property-read Group $group
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
            [['group_id', 'worker_id'], 'required'],
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
        ];
    }


    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }
}
