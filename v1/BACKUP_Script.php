<?php

$ip = $_GET['ip'];

onRun($ip);

function onRun($ip) {

	$file = new SQLite3 ("saves.db");
	$sql = "INSERT INTO list (ip) VALUES ('$ip')";
	$file->query($sql);
	echo "IP Added";

}

?>