<?php

App::uses('Story', 'Model');

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
//	public $fixtures = array(
//		'app.story',
//		'app.sprint'
//	);

	/**
	 * setUp method
	 *
	 * @return void
	 */
	public function setUp() {
		parent::setUp();
		var_dump(class_exists('ClassRegistry'));
		$this->Story = ClassRegistry::init('Story');
//		$this->Story = new Story;
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

	public function testAddStory() {
		$this->markTestIncomplete();
	}

}
