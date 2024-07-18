<?php
include('./dbconnect.php');

$query= $conn->query("SELECT * FROM news")->fetchALL();

$query ="Update  news
SET date = ''
WHERE id=";


$stmt = $conn->prepare($query);
$stmt->execute();
echo  "<br>  ubdated successfuly";
?>


