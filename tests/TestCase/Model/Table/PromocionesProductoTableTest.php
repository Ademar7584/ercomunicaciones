<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PromocionesProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PromocionesProductoTable Test Case
 */
class PromocionesProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PromocionesProductoTable
     */
    public $PromocionesProducto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.promociones_producto',
        'app.productos',
        'app.categorias',
        'app.promociones',
        'app.notificacionescliente',
        'app.clientes',
        'app.personas',
        'app.ventasproducto',
        'app.promocionesproducto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PromocionesProducto') ? [] : ['className' => PromocionesProductoTable::class];
        $this->PromocionesProducto = TableRegistry::get('PromocionesProducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PromocionesProducto);

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
