<?php

$firstName = $_POST['firstName'];
$surName = $_POST['surName'];
$flowerType = $_POST['flowerType'];

//$wrappingColor = $_POST['wrappingColor'];
//$numOfFlowers = $_POST['numOfFlowers'];
//$colorOfFlowers = $_POST['colorOfFlowers'];

include ('dbcon.php');

$sql = "insert into customer(first_Name, sur_Name, flower_Type) values ('$firstName', '$surName', '$flowerType')";

//$sql = "insert into bouquet(color_of_wrapping, number_of_flowers, color_of_flowers) values ('$wrappingColor', '$numOfFlowers', '$colorOfFlowers')";//

mysqli_query($conn, $sql);
mysqli_close($conn);

echo "Information has been added"

?>