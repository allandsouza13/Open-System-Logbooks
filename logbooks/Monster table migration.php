<?php

use Phinx\Migration\AbstractMigration;

class CreateMonsterTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('monster', ['id' => false, 'primary_key' => 'id']);
        $table->addColumn('id', 'integer', ['identity' => true])
            ->addColumn('name', 'string', ['limit' => 20, 'null' => false])
            ->addColumn('image', 'blob', ['null' => false])
            ->addColumn('audio', 'blob', ['null' => false])
            ->create();
    }
}
