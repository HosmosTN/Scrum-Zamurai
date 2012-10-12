<?php
App::uses('StoriesController', 'Controller');

/**
 * StoriesController Test Case
 *
 */
class StoriesControllerTest extends ControllerTestCase {

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
     * testIndex method
     *
     * @return void
     */
    public function testIndex() {
        $this->testAction(
            '/stories', array('data' => array('uso' => 800), 'return' => 'vars')
        );
    }

    /**
     * testAdd method
     *
     * @return void
     */
    public function testAdd() {
        $data = array(
            'Story' => array(
                'id' => 1,
                'sprint_id' => 1,
            )
        );
        $this->testAction(
            '/stories/add', array('data' => $data, 'return' => 'vars')
        );
        $this->assertTrue($this->vars['saved']);
    }

    /**
     * testEdit method
     *
     * @return void
     */
    public function testEdit() {
        $this->markTestIncomplete();
    }

    public function testSwap() {
        $data = array();
        $this->testAction('/stories/swap');
    }

}
