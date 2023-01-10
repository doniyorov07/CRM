<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%salary}}`.
 */
class m230108_153145_add_pay_percentage_column_to_salary_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%salary}}', 'pay_percentage', $this->integer()->notNull());
        $this->addColumn('{{%salary}}', 'pay_basic', $this->integer()->notNull());
        $this->addColumn('{{%salary}}', 'pay_bonus', $this->integer());
        $this->addColumn('{{%salary}}', 'pay_separate', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%salary}}', 'pay_percentage');
        $this->dropColumn('{{%salary}}', 'pay_basic');
        $this->dropColumn('{{%salary}}', 'pay_bonus');
        $this->dropColumn('{{%salary}}', 'pay_separate');
    }
}
