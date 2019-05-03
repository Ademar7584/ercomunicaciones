<?php
use Migrations\AbstractSeed;

class ClientesSeed extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 12; $i++) { 
            $data[] = [
                'nombre' => $faker->firstName(),
                'apellido' => $faker->lastName(),
                'ci' => $faker->numberBetween($min = 100000, $max = 999999),
                'direccion' => $faker->address,
                'telefono' => $faker->phoneNumber,
                'correo' => $faker->email,
                'tipo' => $faker->word,
                'estado' => 1,
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
        }

        $table = $this->table('clientes');
        $table->insert($data)->save();
    }
}
