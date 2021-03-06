<?php
use Migrations\AbstractSeed;

/**
 * Promociones seed.
 */
class PromocionesSeed extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 12; $i++) { 
            $data[] = [
                'nombre' => $faker->text($maxNbChars = 15),
                'descripcion' => $faker->text($maxNbChars = 25),
                'tipo' => $faker->text($maxNbChars = 10),
                'estado' => 1,
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
        }
        
        $table = $this->table('promociones');
        $table->insert($data)->save();
    }
}
