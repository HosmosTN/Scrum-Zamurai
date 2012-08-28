<?php
App::uses('StoriesController', 'Controller');

class StoriesControllerTest extends ControllerTestCase {

	public function testAdd() {
//		App::build(array(
//			'View' => array(
//				CAKE . 'Test' . DS . 'test_app' . DS . 'View' . DS
//			)
//		));
//		$Pages = new PagesController(new CakeRequest(null, false), new CakeResponse());
//
//		$Pages->viewPath = 'Posts';
//		$Pages->display('index');
//		$this->assertRegExp('/posts index/', $Pages->response->body());
//		$this->assertEquals('index', $Pages->viewVars['page']);
//
//		$Pages->viewPath = 'Themed';
//		$Pages->display('TestTheme', 'Posts', 'index');
//		$this->assertRegExp('/posts index themed view/', $Pages->response->body());
//		$this->assertEquals('TestTheme', $Pages->viewVars['page']);
//		$this->assertEquals('Posts', $Pages->viewVars['subpage']);
		$result = $this->testAction('/stories/add', array(
			'method' => 'post',
		));
		debug($result);
	}
}
