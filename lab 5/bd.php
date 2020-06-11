<?php
$dbName = 'lab5' ;//имя базы данных, к которой будет подключение
$dbHost = 'localhost' ;//имя хоста для подключения к БД
$dbUsername = 'root';//Имя пользователя для подключения к базе данных
$dbUserPassword = '';//* пароль для подключения к БД
$cont = null;//*переменная хранящая соединение с базой данных
$cont = new PDO( "mysql:host=".$dbHost.";"."dbname=".$dbName, $dbUsername, $dbUserPassword);
if($cont == FALSE)
{
	echo('НЕ УДАЛОСЬ ПОДКЛЮЧИТЬСЯ К БД');
	exit();
}
// Функция для сохранения данных в БД
function saveFeed($name, $email, $text)
{
	global $cont;
	$sql=$cont->prepare("INSERT INTO lab5(name, email, text) values ('" . $name . "','" . $email . "','" . $text . "')");
	$result= $sql->execute(array($name, $email, $text));	
	}	
function saveLid($name, $number)
{
	global $cont;
	$sql=$cont->prepare("INSERT INTO lid (name, number) values (?,?)");
	$result= $sql->execute(array($name, $number));	
}
//Функция для фильтрации данных полученных через POST запрос $name - переменная для фильтрации данных
function filter($name)
{
	$result = htmlspecialchars( strip_tags( trim($name)));
	return $result;
}
//Функция для получения всех данных из БД
function getAll()
{
	global $cont;
	$result = $cont->query("SELECT * FROM `lab5` ");
	return $result;
}
?>