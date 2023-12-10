<?php
//connection to the database//
include ('dbcon.php');

//it was giving out to me about the timezone so I just added utc one//
date_default_timezone_set('UTC');

//This starts the session//
session_start();

//basically getting from the form itself//
//post same as form, eg $firstName = $_POST['firstName']; firstName is from form//
//getting the data from post//
$firstName = $_POST['firstName'];
$surName = $_POST['surName'];
$dob = $_POST['dob'];

//this looks at flowertype and assigns the first element to the dollar sign varaible. If it doesn't get assigned then its gonna be empty//
if (isset($_POST['flowertype'][0])) {
    $typeOfFlower = $_POST['flowertype'][0];
} else {
    $typeOfFlower = '';
}
//data from form again//
$colorofwrapping = $_POST['wrappingColor'];
$numberOfflowers = $_POST['numOfFlowers'];
$colorOfFlowers = $_POST['colorOfFlowers'];
//depending on whether it's 1 or 0. it's basically checking if specialdelivery in the post data//
$SpecialDelivery = isset($_POST['SpecialDelivery']) ? 1 : 0;
#$SpecialDelivery = isset($_POST['SpecialDelivery']) && $_POST['SpecialDelivery'] == '1';

//The data that I'm getting from the form is stored in these session varaibles//
$_SESSION['customerFirstName'] = $firstName;
$_SESSION['customerSurName'] = $surName;
$_SESSION['customerdob'] = $dob;
$_SESSION['customerflowertype'] = $typeOfFlower;
$_SESSION['customercolorofwrapping'] = $colorofwrapping;
$_SESSION['customernumberOfflowers'] = $numberOfflowers;
$_SESSION['customercolorOfFlowers'] = $colorOfFlowers;

//this closes the connection to the database//
mysqli_close($conn);

//if the value is 1 then it's gonna go to that page basically//
if ($SpecialDelivery === 1) {
    header("Location: SpecialDelivery.html");
}
//echoing to screen that it got inserted into the database//
//echo "Information has been added";//

//this shows a link to the file//
$InventoryList = "inventoryList.php";
echo "<a href='$InventoryList'>Open file for Tables</a>";
?>
