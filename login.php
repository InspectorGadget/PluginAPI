<?php
session_start();

$name = $_POST['username'];
$pass = $_POST['password'];

$file = new SQLite3 ("v1/saves.db");
$sql = "SELECT * FROM users WHERE username = '$name' AND password = '$pass'";
$res = $file->query($sql);

if (!$row = $res->fetchArray(1)) {
	header ("Location: forbidden/");
} else {
	$_SESSION['username'] = $name;
	header ("Location: loggedin/");
}

?>