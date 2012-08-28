<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array('DebugKit.Toolbar');

	/**
	 * If input 'BooksController', ouput is 'Book'.
	 *
	 * @return string
	 */
	protected function singluarClassName() {
		return Inflector::singularize(str_replace('Controller', '', get_class($this)));
	}

	/**
	 *
	 * @see <a href="http://stackoverflow.com/questions/3590097/how-to-overdrive-flash-message-default-of-cakephp">How to overdrive FLASH MESSAGE default of cakePHP - Stack Overflow</a>
	 */
	public function beforeRender() {
		if ($this->Session->check('Message.flash')) {
        $flash = $this->Session->read('Message.flash');

        if ($flash['element'] == 'default') {
            $flash['element'] = 'flash/default';
            $this->Session->write('Message.flash', $flash);
        }
    }

	}
}
