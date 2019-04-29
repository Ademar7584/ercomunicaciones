<?php
use Migrations\AbstractMigration;

class CreateActividadesTable extends AbstractMigration
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
        $table = $this->table('actividades');
        $table->AddColumn('nombre', 'string', array('limit' => 100))
            ->AddColumn('descripcion', 'string')
            ->AddColumn('tipo', 'string', array('limit' => 200))
            ->AddColumn('estado', 'integer')
            ->create();
    }
}
