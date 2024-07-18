<?php

$server = "localhost";
$user_name = "root";
$pw = "";
$dbname = "home";

try {
$conn = new PDO (
"mysql:host=$server;dbname=$dbname",
$user_name,
$pw

);

$conn -> setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION

);

  echo "connected successfully";

 } catch (PODException $e) {

      echo "connection failed: " . $e->getMessage();
    }
?>
