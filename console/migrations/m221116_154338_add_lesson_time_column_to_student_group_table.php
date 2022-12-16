<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%student_group}}`.
 */
class m221116_154338_add_lesson_time_column_to_student_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%student_group}}', 'leson_time', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%student_group}}', 'leson_time');
    }
}
