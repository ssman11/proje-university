<?php
$host = "local host";
$user = "root";
$pass = "";
$dbname = "university";


$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$sql = "SET NAMES 'utf8'";
$result = $db->prepare($sql);
$result->execute();
