<?php
use Migrations\AbstractMigration;

class CreatePromocionesTable extends AbstractMigration
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
        $table = $this->table('promociones');
        $table->AddColumn('nombre', 'string', array('limit' => 100))
            ->AddColumn('descripcion', 'string')
            ->AddColumn('tipo', 'string')
            ->AddColumn('estado', 'integer')
            ->AddColumn('created', 'datetime')
            ->AddColumn('modified', 'datetime')
            ->create();
    }
}
