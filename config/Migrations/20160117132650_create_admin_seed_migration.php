<?php

use Phinx\Migration\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;

class CreateAdminSeedMigration extends AbstractMigration
{
    public function up()
    {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);

        $populator->addEntity('users', 1, [
            'names' => 'administrador',
            'email' => 'admin@test.com',
            'password' => function () {
                return 'admin';
            },
            'rol' => 'admin',
            'estado' => 1,
            'created' => function () use ($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },
            'modified' => function () use ($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            }
        ]);

        $populator->execute();
    }
}
