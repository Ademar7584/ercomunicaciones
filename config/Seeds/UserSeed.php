<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User seed.
 */
class UserSeed extends AbstractSeed
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
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('admin');
        $data = [
            'names' => 'administrador',
            'email' => 'admin@test.com',
            'password' => $password,
            'image' => 'perfil.png',
            'image_dir' => '89ffcee1-7ce0-419a-b989-78a696038a03',
            'rol' => 'admin',
            'estado' => 1,
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
