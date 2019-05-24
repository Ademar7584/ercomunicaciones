<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActividadesUsuarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActividadesUsuarioTable Test Case
 */
class ActividadesUsuarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActividadesUsuarioTable
     */
    public $ActividadesUsuario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actividades_usuario',
        'app.users',
        'app.actividades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ActividadesUsuario') ? [] : ['className' => ActividadesUsuarioTable::class];
        $this->ActividadesUsuario = TableRegistry::get('ActividadesUsuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActividadesUsuario);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
