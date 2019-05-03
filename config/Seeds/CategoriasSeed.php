<?php
use Migrations\AbstractSeed;

class CategoriasSeed extends AbstractSeed
{

    public function run()
    {
        
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 12; $i++) { 
            $data[] = [
                'nombre' => $faker->username,
                'descripcion' => $faker->text,
                'tipo' => 'cat',
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
        }

        $table = $this->table('categorias');
        $table->insert($data)->save();
    }
}
