<?php

include('./dbconnect.php');



$id = $_GET['id'];
$sql = "DELETE FROM users where id='$id'";
$conn->exec($sql);

echo "<br> Data deleted successfully";

header( 'refresh:3 URL=./users.php');

?>


