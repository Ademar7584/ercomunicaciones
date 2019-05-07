<?php
use Migrations\AbstractSeed;

/**
 * PromocionesProducto seed.
 */
class PromocionesProductoSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 2; $i++) { 
            $data[] = [
            'nombre' => $faker->text($maxNbChars = 12),
            'producto_id' => $faker->numberBetween($min = 1, $max = 2),
            'promocione_id' => $faker->numberBetween($min = 1, $max = 2),
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s")
            ];
        }

        $table = $this->table('promociones_productos');
        $table->insert($data)->save();
    }
}
