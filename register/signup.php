<?php

$name = $_POST['username'];
$pass = $_POST['password'];

$file = new SQLite3 ("../v1/saves.db");
$sql = "INSERT INTO users (username, password) VALUES ('$name', '$pass')";
$res = $file->query($sql);

header ("Location: ../");

?>