<?php
use Migrations\AbstractMigration;

class CreateClientesTable extends AbstractMigration
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
        $table = $this->table('clientes');
        $table->AddColumn('nombre', 'string', array('limit' => 100))
            ->AddColumn('apellido', 'string', array('limit' => 100))
            ->AddColumn('ci', 'string', array('limit' => 15))
            ->AddColumn('direccion', 'string', array('limit' => 200))
            ->AddColumn('telefono', 'string', array('limit' => 15))
            ->AddColumn('correo', 'string', array('limit' => 100))
            ->AddColumn('tipo', 'string', array('limit' => 20))
            ->AddColumn('estado', 'integer')
            ->AddColumn('persona_id', 'integer')
            ->AddColumn('created', 'datetime')
            ->AddColumn('modified', 'datetime')
            ->create();
    }
}
