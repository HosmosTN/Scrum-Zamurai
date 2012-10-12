<?php
App::uses('Story', 'Model');
App::uses('MyCakeTestCase', 'Lib');

/**
 * Story Test Case
 *
 */
class StoryTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.story',
        'app.sprint'
    );

    /**
     * @var Story
     */
    protected $Story;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->Story = ClassRegistry::init('Story');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Story);
        parent::tearDown();
    }

    /**
     * @covers Story::getMaxOrder
     */
    public function testGetMaxOrderNumber() {
        $this->assertSame(1, $this->Story->getMaxOrder(1));
    }

}
