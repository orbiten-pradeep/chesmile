<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GalariesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GalariesTable Test Case
 */
class GalariesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GalariesTable
     */
    public $Galaries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.galaries',
        'app.events',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.posts',
        'app.categories',
        'app.sub_categories',
        'app.events_sub_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Galaries') ? [] : ['className' => 'App\Model\Table\GalariesTable'];
        $this->Galaries = TableRegistry::get('Galaries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Galaries);

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
