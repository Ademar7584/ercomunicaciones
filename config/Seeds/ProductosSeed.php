<?php
use Migrations\AbstractSeed;

class ProductosSeed extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 12; $i++) { 
            $data[] = [
                'marca' => $faker->word,
                'modelo' => $faker->word,
                'precio' => $faker->numberBetween($min = 2, $max = 5),
                'stock' => $faker->numberBetween($min = 4, $max = 10),
                'estado' => 1,
                'image' => 'imagen2.jpg',
                'image_dir' => 'dc7fdea1-6bc6-41f5-b32b-3628399744cd',
                'categoria_id' => $faker->numberBetween($min = 1, $max = 12),
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
        }

        $table = $this->table('productos');
        $table->insert($data)->save();
    }
}
