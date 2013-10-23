<?php
	include('bibhtmler.php');
	$bibhtmler = new bibhtmler(array('groupby' => 'year'));
?>
<?php echo($bibhtmler->process('test.bib')) ?>