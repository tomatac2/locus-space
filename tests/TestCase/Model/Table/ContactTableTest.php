<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactTable Test Case
 */
class ContactTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactTable
     */
    public $Contact;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contact',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contact') ? [] : ['className' => ContactTable::class];
        $this->Contact = TableRegistry::getTableLocator()->get('Contact', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contact);

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
