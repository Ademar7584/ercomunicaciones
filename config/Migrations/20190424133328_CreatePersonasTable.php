<?php
use Migrations\AbstractMigration;

class CreatePersonasTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('personas');
        $table->AddColumn('nombre', 'string', array('limit' => 50))
        ->AddColumn('created', 'datetime')
        ->AddColumn('modified', 'datetime')
        ->create();
    }
}
