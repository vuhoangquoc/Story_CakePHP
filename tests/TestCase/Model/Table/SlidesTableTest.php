<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SlidesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SlidesTable Test Case
 */
class SlidesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SlidesTable
     */
    protected $Slides;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Slides',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Slides') ? [] : ['className' => SlidesTable::class];
        $this->Slides = $this->getTableLocator()->get('Slides', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Slides);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SlidesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
