<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%group}}`.
 */
class m221112_175138_add_updated_by_column_to_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%group}}', 'updated_by', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%group}}', 'updated_by');
    }
}
