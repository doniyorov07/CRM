<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cost}}`.
 */
class m230116_154546_create_cost_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cost}}', [
            'id' => $this->primaryKey(),
            'cost_name' => $this->string(),
            'date' => $this->date(),
            'cost_reason' => $this->string(),
            'cost_price' => $this->integer(),
            'descreption' => $this->string(500)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cost}}');
    }
}
