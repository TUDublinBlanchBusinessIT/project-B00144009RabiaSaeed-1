<?php

include ('dbcon.php');

$firstName = $_POST['firstName'];
$surName = $_POST['surName'];
$flowerType = $_POST['flowerType'];

echo "$firstName, $surName, $flowerType";

$sql = "INSERT INTO orders (first_Name, sur_Name, flower_Type) VALUES ('$firstName', '$surName', '$flowerType')";

echo $sql;

?>