<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
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
        $table = $this->table('users');
        $table->AddColumn('names', 'string', array('limit' => 100))
            ->AddColumn('email', 'string', array('limit' => 100))
            ->AddColumn('password', 'string')
            ->AddColumn('rol', 'enum', array('values' => 'admin, user, cliente'))
            ->AddColumn('estado', 'boolean')
			->AddColumn('image', 'string')
			->AddColumn('image_dir', 'string')
            ->AddColumn('persona_id', 'integer', array('limit' => 11))
            ->AddColumn('created', 'datetime')
            ->AddColumn('modified', 'datetime')
            ->create();
    }
}
