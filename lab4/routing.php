<?php
	$id = null;
	$id = $_GET['id'];
	
	switch($id)
	{
		case 'contact': include 'inc/contact/contact.inc.php'; break;
		case 'table': include 'inc/index.html'; break;
		case 'about': include 'inc/about/about.inc.php'; break;
		case 'gbook': include 'inc/gbook.inc.php'; break;
		default: include 'inc/index.inc.php'; break;
	}
?>