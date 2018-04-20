<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutoresLivrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutoresLivrosTable Test Case
 */
class AutoresLivrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AutoresLivrosTable
     */
    public $AutoresLivros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.autores_livros',
        'app.autores',
        'app.livros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AutoresLivros') ? [] : ['className' => AutoresLivrosTable::class];
        $this->AutoresLivros = TableRegistry::get('AutoresLivros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AutoresLivros);

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
