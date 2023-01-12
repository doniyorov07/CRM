<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%salary}}`.
 */
class m230112_161504_add_month_column_to_salary_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%salary}}', 'month', $this->string());
        $this->addColumn('{{%salary}}', 'created_at', $this->integer());
        $this->addColumn('{{%salary}}', 'updated_at', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%salary}}', 'month');
        $this->dropColumn('{{%salary}}', 'created_at');
        $this->dropColumn('{{%salary}}', 'updated_at');
    }
}
