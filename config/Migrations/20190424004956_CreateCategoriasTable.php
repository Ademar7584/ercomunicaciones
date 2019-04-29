<?php
use Migrations\AbstractMigration;

class CreateCategoriasTable extends AbstractMigration
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
        $table = $this->table('categorias');
        $table->AddColumn('nombre', 'string', array('limit' => 100))
            ->AddColumn('descripcion', 'text')
            ->AddColumn('tipo', 'string')
            ->create();
    }
}
