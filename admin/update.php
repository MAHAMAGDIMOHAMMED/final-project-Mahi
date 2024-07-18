<?php
include('./dbconnect.php');

$query= $conn->query("SELECT * FROM categories")->fetchALL();

$query ="Update categories
SET category_name =''
WHERE id=";


$stmt = $conn->prepare($query);
// $stmt->execute();
echo "<br> ubdated successfuly";
?>






