<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%month}}`.
 */
class m221215_152429_create_month_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%month}}', [
            'id' => $this->primaryKey(),
            'month_name' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%month}}');
    }
}
