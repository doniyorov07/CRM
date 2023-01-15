<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%demo}}`.
 */
class m230114_151119_create_demo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%demo}}', [
            'id' => $this->primaryKey(),
            'edu_name' => $this->string(),
            'name' => $this->string(),
            'number' => $this->integer(),
            'captcha' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%demo}}');
    }
}
