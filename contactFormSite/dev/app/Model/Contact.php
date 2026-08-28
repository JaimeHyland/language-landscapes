<?php
class Contact extends AppModel {
	public $useTable = false;
	public $name = "Contact";

	protected $_schema = array(
		'email' => array('type' => 'string', 'null' => false, 'default' => ''),
		'firstName' => array('type' => 'string', 'null' => false, 'default' => ''),
		'lastName' => array('type' => 'string', 'null' => false, 'default' => ''),
		'company' => array('type' => 'string', 'null' => false, 'default' => ''),
		'jobTitle' => array('type' => 'string', 'null' => false, 'default' => ''),
		'phone' => array('type' => 'string', 'null' => false, 'default' => ''),
		'translateFrom' => array('type' => 'string', 'null' => false, 'default' => ''),
		'translateTo' => array('type' => 'string', 'null' => false, 'default' => ''),
		'additionalComments' => array('type' => 'string', 'null' => false, 'default' => '')
	);

	public $validate = array(
		'email' => array(
            'rule' => 'email',
            'allowEmpty' => false,
            'required' => true,
            'message' => 'You have entered an invalid e-mail address.'
        )
    );
}

?>