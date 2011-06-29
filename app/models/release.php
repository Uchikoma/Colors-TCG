<?php
class Release extends AppModel {
	var $name = 'Release';
	var $hasMany = 'Deck';
	
	var $validate = array(
		'release_date'	=> array('rule' => array('date'), 'message' => 'Please select a valid date', 'allowEmpty' => false)
	);
	
	

}

?>