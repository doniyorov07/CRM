<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%student_group}}`.
 */
class m221116_154741_add_lesson_days_column_to_student_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%student_group}}', 'lesson_days', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%student_group}}', 'lesson_days');
    }
}
