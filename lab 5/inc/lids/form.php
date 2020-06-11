<?php
	include_once 'C:/xampp/htdocs/lab5/bd.php';
	
	if(isset($_POST['submit']))
	{
		$name = filter($_POST['name']);
		$number = filter($_POST['number']);
		saveLid($name, $number);
		include('C:/xampp/htdocs/lab5/index.php');
	}
?> 