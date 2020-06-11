<?php
	include_once 'C:/xampp/htdocs/lab5/bd.php';

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text']) && isset($_POST['submit']))
	{	
		$name = filter($_POST['name']);
		$email = filter($_POST['email']);
		$text = filter($_POST['text']);
		echo($messege);
	 include('\xampp\htdocs\lab5\index.php');
		saveFeed($name, $email, $text);
	}	
?> 
