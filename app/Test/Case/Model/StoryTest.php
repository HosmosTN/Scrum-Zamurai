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
		$this->Story = new Story;

//        $this->_pdo->exec('DROP TABLE IF EXISTS stories;');
//        $this->_pdo->exec('CREATE TABLE stories (id INT, name TEXT);');
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
        $input = array(
            'story' => array(
                'id' => 1,
                'name' => 'story 1',
            )
        );
        $this->Story->save($input);
        $this->markTestIncomplete();
	}

}
