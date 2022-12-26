<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%payments}}`.
 */
class m221223_050720_add_status_column_to_payments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%payments}}', 'status', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%payments}}', 'status');
    }
}
