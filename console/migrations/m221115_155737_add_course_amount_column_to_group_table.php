<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%group}}`.
 */
class m221115_155737_add_course_amount_column_to_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%group}}', 'course_amount', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%group}}', 'course_amount');
    }
}
