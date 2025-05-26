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
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
App::uses('AppModel', 'Model');


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array('Cookie','Session');
	public $helpers = array('Html'=>array('className'=>"MyHtml"),'Session');

	public function beforeFilter() {
		$this->_setLanguage();
	}

	private function _setLanguage() {
		if($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
			$this->Session->write('Config.language', $this->Cookie->read('lang'));
		}
		else if(isset($this->params['language']) && ($this->params['language'] != $this->Session->read('Config.language'))) {
			$this->Session->write('Config.language', $this->params['language']);
			$this->Cookie->write('lang', $this->params['language'], false, '20 days');
		}

		// if there is no session nor cookie
		if(!$this->Session->check('Config.language') && !$this->Cookie->read('lang')){
			$this->Session->write('Config.language', 'deu');
			$this->Cookie->write('lang', 'deu', false, '20 days');
		}

		//if there is session but no cookie
		if($this->Session->check('Config.language') && !$this->Cookie->read('lang')){
			$this->Cookie->write('lang', $this->Session->read('Config.language'), false, '20 days');
		}
	}

	public function redirect($url, $status = null, $exit = true) {
		if(!isset($url['language']) && $this->Session->check('Config.language')) {
			$url['language'] = $this->Session->read('Config.language');
		}
		parent::redirect($url,$status,$exit);
	}
}
