<h2>Create New Release</h2>
<?php
	echo $this->Form->create('Release') . "\n";
	echo $this->Form->input('release_date') . "\n";
	echo $this->Form->end('Create') . "\n";
?>