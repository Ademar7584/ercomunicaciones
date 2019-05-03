<?php
use Migrations\AbstractMigration;

class CreateNotificacionesClienteTable extends AbstractMigration
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
        $table = $this->table('notificacionescliente');
        $table->AddColumn('nombre', 'string', array('limit'=> 100))
            ->AddColumn('cliente_id', 'integer')
            ->AddColumn('promocione_id', 'integer')
            ->AddColumn('created', 'datetime')
            ->AddColumn('modified', 'datetime')
            ->create();
    }
}
