<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class PageController extends AppController {
	public $components = array('Session', 'AjaxMultiUpload.Upload');

	public function findext($filename) {
		$filename = strtolower($filename);
		$exts = split("[/\\.]", $filename);
		$n = count($exts)-1;
		$exts = $exts[$n];
		return $exts;
	}

	public function sendForm() {
		$this->loadModel('Contact');

		$this->set('sid', $this->Session->id());

		if($this->request->isPost() && !empty($this->data)) {
			$this->Contact->set($this->data);
			if( $this->Contact->validates() ){
				$msg = "";
				$msg = "
				Form information:
				firstName: ".$this->data['Contact']['firstName']."
				lastName: ".$this->data['Contact']['lastName']."
				company: ".$this->data['Contact']['company']."
				jobTitle: ".$this->data['Contact']['jobTitle']."
				email: ".$this->data['Contact']['email']."
				phone: ".$this->data['Contact']['phone']."
				translateFrom: ".$this->data['Contact']['translateFrom']."
				translateTo: ".$this->data['Contact']['translateTo']."
				additionalComments: ".$this->data['Contact']['additionalComments']."
				
				Files to quote:
				";

				// send email with links to files
				if (file_exists(WWW_ROOT . 'files/documentToQuote/' . $this->Session->id()) && $handle = opendir(WWW_ROOT . 'files/documentToQuote/' . $this->Session->id() )) {

				    /* This is the correct way to loop over the directory. */
				    while (false !== ($entry = readdir($handle))) {
				    	if($entry != '.' && $entry != '..')
						$msg .= "
http://language-landscapes.com/dev/files/documentToQuote/" . $this->Session->id() . "/$entry";
				    }

				    closedir($handle);
				}

				$Email = new CakeEmail();
				$Email->from(array('info@language-landscapes.com' => 'Language Landscapes'));
				$Email->to('info@language-landscapes.com');
				$Email->subject('Language Landscapes: new free quote request');
				session_regenerate_id();
				#$Email->send($msg);

				$this->Session->setFlash("Thank you for your email!", 'flash_success');
			}else{
				$errors = $this->Contact->validationErrors;
				$errorsMsg = "";
				foreach ($errors as $key => $value) {
					$errorsMsg .= implode('<br>', $value);
				}
				$this->Session->setFlash($errorsMsg, 'flash_error');
			}
		}
	}

	public function home() {
		$this->sendForm();
		$this->set('title', 'PgLinkHomePage');
		$this->set('cookie', $this->Cookie->read('lang'));
	}

	public function the_translation_process() {
		$this->sendForm();
		$this->set('title', 'PgLinkXlationProcess');
	}

	public function quality() {
		$this->sendForm();
		$this->set('title', 'PgLinkQuality');
	}

	public function technologies() {
		$this->sendForm();
		$this->set('title', 'PgLinkWorkflowsTools');
	}

	public function the_challenge() {
		$this->sendForm();
		$this->set('title', 'PgLinkTheChallenge');
	}

	public function the_workflow() {
		$this->sendForm();
		$this->set('title', 'PgLinkTheWorkflow');
	}

	public function work_with_us() {
		$this->sendForm();
		$this->set('title', 'PgLinkWorkWithUs');
	}

	public function agb() {
		$this->sendForm();
		$this->set('title', 'PgLinkGenTandC');
	}

	public function impressum() {
		$this->sendForm();
		$this->set('title', 'PgLinkLegalNotice');
	}

	public function who_we_are() {
		$this->sendForm();
		$this->set('title', 'PgLinkWhoWeAre');
	}

	public function sitemap() {
		$this->sendForm();
		$this->set('title', 'PgLinkSiteMap');
	}

	public function services() {
		$this->sendForm();
		$this->set('title', 'Services');
	}

	public function i18n_support() {
		$this->sendForm();
		$this->set('title', 'LblI18n');
	}

	public function software_l10n() {
		$this->sendForm();
		$this->set('title', 'LblSoftwareL10n');
	}

	public function web_l10n() {
		$this->sendForm();
		$this->set('title', 'LblWebL10n');
	}

	public function translation() {
		$this->sendForm();
		$this->set('title', 'LblTranslation');
	}

	public function proofing() {
		$this->sendForm();
		$this->set('title', 'LblProofing');
	}

	public function review() {
		$this->sendForm();
		$this->set('title', 'LblReview');
	}

	public function terminology_managment() {
		$this->sendForm();
		$this->set('title', 'LblTermMgt');
	}

	public function i18n_issues() {
		$this->sendForm();
		$this->set('title', 'LblI18nIssues');
	}

	public function l10n_issues() {
		$this->sendForm();
		$this->set('title', 'LblIL10nIssues');
	}

	public function translation_issues() {
		$this->sendForm();
		$this->set('title', 'LblTransIssues');
	}

	public function edit_and_adapt() {
		$this->sendForm();
		$this->set('title', 'LblEditAdapt');
	}

	public function optimize() {
		$this->sendForm();
		$this->set('title', 'LblOptimize');
	}
}