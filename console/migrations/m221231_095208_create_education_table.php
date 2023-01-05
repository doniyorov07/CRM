<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%education}}`.
 */
class m221231_095208_create_education_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%education}}', [
            'id' => $this->primaryKey(),
            'edu_name' => $this->string(),
            'edu_location' => $this->string(),
            'edu_number' => $this->integer(),
            'edu_email' => $this->string(),
            'image' => $this->string(),
            'status' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%education}}');
    }
}
