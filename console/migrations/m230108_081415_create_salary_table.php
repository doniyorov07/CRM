<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%salary}}`.
 */
class m230108_081415_create_salary_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%salary}}', [
            'id' => $this->primaryKey(),
            'worker_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%salary}}');
    }
}
