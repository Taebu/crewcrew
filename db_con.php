<?php
$DOCUMENT_ROOT=$_SERVER['CONTEXT_DOCUMENT_ROOT'];
$host_name="1.255.226.67";
$db_name="crew";
$user_name="cashq";
$db_password="cashq9495";
$pdo_connect=sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4',$host_name,$db_name);
$db = new PDO($pdo_connect, $user_name, $db_password);

if (!function_exists('mysql_query')) 
{
	function mysql_query($sql)
	{
		global $db;
		return $db->query($sql);
	}
}

if (!function_exists('mysql_fetch_assoc'))
{
	function mysql_fetch_assoc($query)
	{
		return $query->fetch(PDO::FETCH_ASSOC);
	}
}

if (!function_exists('mysql_fetch_array'))
{
	function mysql_fetch_array($query)
	{
		return $query->fetch(PDO::FETCH_ASSOC);
	}
}

if (!function_exists('mysql_num_rows'))
{
	function mysql_num_rows($query)
	{
		return $query->rowCount();
	}
}

extract($_REQUEST);
extract($_POST);
extract($_GET);
unset($REQUEST_METHOD);
?>