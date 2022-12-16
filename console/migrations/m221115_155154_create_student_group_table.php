<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student_group}}`.
 */
class m221115_155154_create_student_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student_group}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'student_id' => $this->integer(),
            'course_id' => $this->integer(),
            'started_at' => $this->date(),
            'finished_at' => $this->date(),
            'course_amount' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student_group}}');
    }
}
