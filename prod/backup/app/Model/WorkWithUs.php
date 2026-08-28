<?php
class WorkWithUs extends AppModel {
	public $useTable = false;
	public $name = "WorkWithUs";

	protected $_schema = array(
		'email' => array('type' => 'string', 'null' => false, 'default' => ''),
		'firstName' => array('type' => 'string', 'null' => false, 'default' => ''),
		'lastName' => array('type' => 'string', 'null' => false, 'default' => ''),
		'email' => array('type' => 'email', 'null' => false, 'default' => ''),
		
		'translation' => array('type' => 'boolean', 'null' => false, 'default' => ''),
		'localization' => array('type' => 'boolean', 'null' => false, 'default' => ''),
		'copywriting' => array('type' => 'boolean', 'null' => false, 'default' => ''),
		'optimization' => array('type' => 'boolean', 'null' => false, 'default' => ''),
		'internationalization' => array('type' => 'boolean', 'null' => false, 'default' => ''),
		
		'langpairs' => array('type' => 'string', 'null' => false, 'default' => ''),
		'message' => array('type' => 'string', 'null' => false, 'default' => '')
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