<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsubcategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsubcategoriesTable Test Case
 */
class EventsubcategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventsubcategoriesTable
     */
    public $Eventsubcategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.eventsubcategories',
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
        $config = TableRegistry::exists('Eventsubcategories') ? [] : ['className' => 'App\Model\Table\EventsubcategoriesTable'];
        $this->Eventsubcategories = TableRegistry::get('Eventsubcategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Eventsubcategories);

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
