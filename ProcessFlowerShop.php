<?php

//getting the data fro post//
$firstName = $_POST['firstName'];
$surName = $_POST['surName'];
$flowerType = $_POST['flowerType'];

//$wrappingColor = $_POST['wrappingColor'];
//$numOfFlowers = $_POST['numOfFlowers'];
//$colorOfFlowers = $_POST['colorOfFlowers'];

//connection to the database//
include ('dbcon.php');

//sql query//
$sql = "insert into customer(first_Name, sur_Name, flower_Type) values ('$firstName', '$surName', '$flowerType')";

//$sql = "insert into bouquet(color_of_wrapping, number_of_flowers, color_of_flowers) values ('$wrappingColor', '$numOfFlowers', '$colorOfFlowers')";//

//executing sql query//
mysqli_query($conn, $sql);
//closing connection to db//
mysqli_close($conn);

//echoing to screen that it got inserted into the database//
echo "Information has been added"

?>