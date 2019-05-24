<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

class UsersSeed extends AbstractSeed
{

    public function run()
    {
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('usuario');

        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 12; $i++) { 
            $data[] = [
                'names' => $faker->userName,
                'email' => $faker->email,
                'password' => $password,
                'image' => 'perfil.png',
                'image_dir' => '89ffcee1-7ce0-419a-b989-78a696038a03',
                'rol' => $faker->randomElement($array = array('user', 'cliente')),
                'estado' => 1,
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
        }

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
