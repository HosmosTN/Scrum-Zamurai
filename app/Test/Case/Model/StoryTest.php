<?php
App::uses('Story', 'Model');
App::uses('MyCakeTestCase', 'Lib');

/**
 * Story Test Case
 *
 */
class StoryTest extends MyCakeTestCase {

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

    public function testAdd() {
        $this->markTestIncomplete();
    }

}
