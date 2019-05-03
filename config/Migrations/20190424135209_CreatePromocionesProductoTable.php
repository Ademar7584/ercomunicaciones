<?php
use Migrations\AbstractMigration;

class CreatePromocionesProductoTable extends AbstractMigration
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
        $table = $this->table('promocionesproducto');
        $table->AddColumn('nombre', 'string', array('limit' => 100))
            ->AddColumn('producto_id', 'integer', array('limit' => 11))
            ->AddColumn('promocione_id', 'integer', array('limit' => 11))
            ->AddColumn('created', 'datetime')
            ->AddColumn('modified', 'datetime')
            ->create();
    }
}
