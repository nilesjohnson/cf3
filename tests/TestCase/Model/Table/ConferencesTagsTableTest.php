<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferencesTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferencesTagsTable Test Case
 */
class ConferencesTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferencesTagsTable
     */
    public $ConferencesTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.conferences_tags',
        'app.conferences',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ConferencesTags') ? [] : ['className' => ConferencesTagsTable::class];
        $this->ConferencesTags = TableRegistry::getTableLocator()->get('ConferencesTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConferencesTags);

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
