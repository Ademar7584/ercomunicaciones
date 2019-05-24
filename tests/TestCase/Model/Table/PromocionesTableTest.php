<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PromocionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PromocionesTable Test Case
 */
class PromocionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PromocionesTable
     */
    public $Promociones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.promociones',
        'app.notificacionescliente',
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
        $config = TableRegistry::exists('Promociones') ? [] : ['className' => PromocionesTable::class];
        $this->Promociones = TableRegistry::get('Promociones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Promociones);

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
}
