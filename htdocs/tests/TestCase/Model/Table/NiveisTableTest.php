<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NiveisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NiveisTable Test Case
 */
class NiveisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NiveisTable
     */
    public $Niveis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Niveis',
        'app.Cursos',
        'app.Nivels',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Niveis') ? [] : ['className' => NiveisTable::class];
        $this->Niveis = TableRegistry::getTableLocator()->get('Niveis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Niveis);

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
