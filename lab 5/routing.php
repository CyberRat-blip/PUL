<?php
	$id = null;
	$id = $_GET['id'];
	
	switch($id)
	{
		case 'contact': include 'C:/xampp/htdocs/lab5/inc/contact/contact.inc.php'; break;
		case 'table': include 'C:/xampp/htdocs/lab5/'; break;
		case 'about': include 'C:/xampp/htdocs/lab5/inc/about/about.inc.php'; break;
		default: include 'inc/index.inc.php'; break;
	}
?>