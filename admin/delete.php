<?php

include('./dbconnect.php');



$id = $_GET['id'];
$sql = "DELETE FROM categories where id='$id'";
$conn->exec($sql);

echo "<br> Data deleted successfully";

header( 'refresh:3 URL=./categories.php');

?>


