<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%payments}}`.
 */
class m221223_050629_add_group_id_column_to_payments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%payments}}', 'group_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%payments}}', 'group_id');
    }
}
