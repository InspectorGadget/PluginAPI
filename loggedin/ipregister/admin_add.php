<?php

$ip = $_POST['address'];

onRun($ip);

function onRun($ip) {

	$file = new SQLite3 ("../../v1/saves.db");
	$sql = "INSERT INTO list (ip) VALUES ('$ip')";
	$file->query($sql);
	header ("Location: ../?success");

}

?>