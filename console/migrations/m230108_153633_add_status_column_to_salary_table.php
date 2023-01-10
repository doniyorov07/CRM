<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%salary}}`.
 */
class m230108_153633_add_status_column_to_salary_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%salary}}', 'status', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%salary}}', 'status');
    }
}
