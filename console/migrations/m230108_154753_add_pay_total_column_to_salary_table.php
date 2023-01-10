<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%salary}}`.
 */
class m230108_154753_add_pay_total_column_to_salary_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%salary}}', 'pay_total', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%salary}}', 'pay_total');
    }
}
