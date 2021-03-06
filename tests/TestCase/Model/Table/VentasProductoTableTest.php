<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VentasProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VentasProductoTable Test Case
 */
class VentasProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VentasProductoTable
     */
    public $VentasProducto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ventas_producto',
        'app.clientes',
        'app.personas',
        'app.notificacionescliente',
        'app.ventasproducto',
        'app.productos',
        'app.categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VentasProducto') ? [] : ['className' => VentasProductoTable::class];
        $this->VentasProducto = TableRegistry::get('VentasProducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VentasProducto);

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
