<?php

use yii\db\Migration;

/**
 * Class m191011_191424_FileUpload
 */
class m191011_191424_FileUpload extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("files",[
            "id" => $this->primaryKey(),
            "title" => $this->string()->notNull(),
            "path" => $this->string()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191011_191424_FileUpload cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191011_191424_FileUpload cannot be reverted.\n";

        return false;
    }
    */
}
