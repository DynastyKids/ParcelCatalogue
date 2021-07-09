<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParcellistTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParcellistTable Test Case
 */
class ParcellistTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParcellistTable
     */
    public $Parcellist;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Parcellist',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Parcellist') ? [] : ['className' => ParcellistTable::class];
        $this->Parcellist = TableRegistry::getTableLocator()->get('Parcellist', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Parcellist);

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
