<?php

use yii\db\Schema;
use yii\db\Migration;

class m250619_124215_create_table_application extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('application', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'date_of_birth' => $this->date()->notNull(),
            'description' => $this->text(),
            'income' => $this->decimal(),
            'number_of_dependants' => $this->integer(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250619_124215_create_table_user cannot be reverted.\n";
        $this->dropTable('application');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250619_124215_create_table_user cannot be reverted.\n";

        return false;
    }
    */
}
