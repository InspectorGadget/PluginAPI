<?php
error_reporting(0);

$ip = $_GET['ip'];

if (!isset($ip)) {
	$json = new Stdclass();
	$json->ip = "Undefined";
	$json->enable = false;
	$myJSON = json_encode($json);
	echo $myJSON;
} else {

onRun($ip);

}

function onRun($ip) {

	$file = new SQLite3 ("saves.db");
	$sql = "SELECT * FROM list WHERE ip = '$ip'";
	$res = $file->query($sql);
	if (!$row = $res->fetchArray(1)) {
		
		// $sql = "INSERT INTO list (ip) VALUES ('$ip')";
		// $res = $file->query($sql);

		$json = new Stdclass();
		$json->ip = $ip;
		$json->enable = false;
		$myJSON = json_encode($json);
		echo $myJSON;

	} else {

		$json = new Stdclass();
		$json->ip = $ip;
		$json->enable = true;
		$myJSON = json_encode($json);
		echo $myJSON;

	}

}

?>