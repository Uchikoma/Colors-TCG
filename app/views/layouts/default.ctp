<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<?php
		print $this->Html->charset() . "\n"; 
		print "\t" . $this->Html->css('colors.css') . "\n";		 
	?>
</head>
<body>
	<?php echo $content_for_layout ?>
</body>
</html>
