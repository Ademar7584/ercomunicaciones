<?php
use Migrations\AbstractMigration;

class CreateActividadesUsuarioTable extends AbstractMigration
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
        $table = $this->table('actividades_usuario');
        $table->AddColumn('nombre', 'string', array('limit' => 100))
            ->AddColumn('user_id', 'integer')
            ->AddColumn('actividade_id', 'integer')
            ->AddColumn('created', 'datetime')
            ->AddColumn('modified', 'datetime')
            ->create();
    }
}
