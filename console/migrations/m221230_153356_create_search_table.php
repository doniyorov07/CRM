<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%search}}`.
 */
class m221230_153356_create_search_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%search}}', [
            'id' => $this->primaryKey(),
            'month' => $this->string(),
            'name' => $this->string(),
            'decreption' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%search}}');
    }
}
