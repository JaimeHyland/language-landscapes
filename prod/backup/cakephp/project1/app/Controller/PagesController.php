<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class PagesController extends AppController {
	public function display() {
		$config = array(
			'email' => array(
			'host' => 'relay-hosting.secureserver.net',
			'port' => 25,
		));
		$Email = new CakeEmail($config);
		$Email->from(array('info@language-landscapes.com' => 'My Site'));
		$Email->to('info@language-landscapes.com');
		$Email->subject('CakePHP');

		if(!$Email->send()) {
		    CakeLog::write('debug', $this->Email->smtpError);
		}

		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
}
