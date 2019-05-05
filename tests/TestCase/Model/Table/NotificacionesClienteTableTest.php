<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificacionesClienteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificacionesClienteTable Test Case
 */
class NotificacionesClienteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificacionesClienteTable
     */
    public $NotificacionesCliente;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.notificaciones_cliente',
        'app.clientes',
        'app.personas',
        'app.notificacionescliente',
        'app.promociones',
        'app.promocionesproducto',
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
        $config = TableRegistry::exists('NotificacionesCliente') ? [] : ['className' => NotificacionesClienteTable::class];
        $this->NotificacionesCliente = TableRegistry::get('NotificacionesCliente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NotificacionesCliente);

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
