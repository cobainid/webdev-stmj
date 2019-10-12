<?php

use yii\db\Migration;

/**
 * Class m191011_201729_job
 */
class m191011_201729_job extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("job",[
            "id" => $this->primaryKey(),
            "name" => $this->string()->notNull(),
            "desc" => $this->text()
        ]);

        $data = [["siswa","belajar"]
                ,["system analyst","ya seperti itu"]
                ,["pemain sepak bola","mencetak gool"]
                ,["Pedagang","mencari laba"]];
        foreach($data as $row){
            $this->insert('job',[
                "name" => $row[0],
                "desc" => $row[1]]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191011_201729_job cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191011_201729_job cannot be reverted.\n";

        return false;
    }
    */
}
