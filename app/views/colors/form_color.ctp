<h2>Create New Release</h2>
<?php
	echo $this->Form->create('Color') . "\n";
	echo $this->Form->input('color_name') . "\n";
	echo $this->Form->input('order') . "\n";
	echo $this->Form->input('alt_text') . "\n";
	echo $this->Form->end('Add Color') . "\n";
?>