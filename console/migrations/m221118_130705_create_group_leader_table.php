<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group_leader}}`.
 */
class m221118_130705_create_group_leader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group_leader}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'worker_id' => $this->integer(),
            'group_name' => $this->string(),
            'wroker_name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%group_leader}}');
    }
}
