<?php

use yii\db\Migration;

/**
 * Class m191004_195630_siswa
 */
class m191004_195630_siswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('siswa',[
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'no_hp' => $this->string()->notNull()
        ]);

        $data = [
            ["facru","0856398756231"],
            ["kholiqul","0817265378635"]
        ];

        foreach($data as $row){
            $this->insert('siswa',[
                    'nama' => $row[0],
                    'no_hp' => $row[1]
                ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191004_195630_siswa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191004_195630_siswa cannot be reverted.\n";

        return false;
    }
    */
}
