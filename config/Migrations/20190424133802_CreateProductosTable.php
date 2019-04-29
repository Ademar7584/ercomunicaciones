<?php
use Migrations\AbstractMigration;

class CreateProductosTable extends AbstractMigration
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
        $table = $this->table('productos');
        $table->AddColumn('marca', 'string', array('limit' => 100))
            ->AddColumn('modelo', 'string', array('limit' => 100))
            ->AddColumn('precio', 'integer', array('limit' => 11))
            ->AddColumn('stock', 'integer', array('limit' => 11))
            ->AddColumn('estado', 'integer')
			->AddColumn('image', 'string')
			->AddColumn('image_dir', 'string')
            ->AddColumn('categoria_id', 'integer')
            ->AddColumn('created', 'datetime')
            ->AddColumn('modified', 'datetime')
            ->create();
    }
}
