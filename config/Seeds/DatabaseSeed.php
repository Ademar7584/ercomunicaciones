<?php
use Migrations\AbstractSeed;

/**
 * Database seed.
 */
class DatabaseSeed extends AbstractSeed
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
        $this->call('UserSeed');
        $this->call('UsersSeed');
        $this->call('CategoriasSeed');
        $this->call('PromocionesSeed');
        $this->call('ActividadesSeed');
        $this->call('ClientesSeed');
        $this->call('ProductosSeed');
        
    }
}
