<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%payments}}`.
 */
class m221216_043748_add_group_column_to_payments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%payments}}', 'group', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%payments}}', 'group');
    }
}
