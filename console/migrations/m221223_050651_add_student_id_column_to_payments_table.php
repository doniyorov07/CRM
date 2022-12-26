<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%payments}}`.
 */
class m221223_050651_add_student_id_column_to_payments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%payments}}', 'student_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%payments}}', 'student_id');
    }
}
