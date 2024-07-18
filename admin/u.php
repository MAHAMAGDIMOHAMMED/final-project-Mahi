<?php
include('./dbconnect.php');

$query= $conn->query("SELECT * FROM  users")->fetchALL();

$query ="Update  users
SET full_name = ''
WHERE id=";


$stmt = $conn->prepare($query);
$stmt->execute();
echo  "<br>  ubdated successfuly";
?>


