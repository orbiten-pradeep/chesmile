<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MediapartnersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MediapartnersTable Test Case
 */
class MediapartnersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MediapartnersTable
     */
    public $Mediapartners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mediapartners',
        'app.events',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.posts',
        'app.categories',
        'app.sub_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Mediapartners') ? [] : ['className' => 'App\Model\Table\MediapartnersTable'];
        $this->Mediapartners = TableRegistry::get('Mediapartners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mediapartners);

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
