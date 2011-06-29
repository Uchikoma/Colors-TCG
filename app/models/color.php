<?php
class Color extends AppModel {
	var $name = 'Color'; //Necessary for PHP4, optional for PHP5.
	//var $primaryKey = 'color';
	
	//Default order value is 0.
	var $validate = array(
		'color_name'	=> array('rule' => array('alphaNumeric'),	'message' => 'Name of color must be alphanumeric only.',	'allowEmpty' => false),
		'order'			=> array('rule' => array('numeric'), 		'message' => 'Color order must be numeric', 				'allowEmpty' => true),
		'alt_text'		=> array('rule' => array('alphaNumeric'),	'message' => 'Alternate text for color image must be alphanumeric only', 'allowEmpty' => true),
	);
}
?>