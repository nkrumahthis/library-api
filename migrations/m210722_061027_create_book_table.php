<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m210722_061027_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'author' => $this->string(),
            'release_year' => $this->smallInteger(),
            'is_available_for_load' => $this->boolean()->defaultValue(true)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
