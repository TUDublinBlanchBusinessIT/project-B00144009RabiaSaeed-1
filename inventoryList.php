<?php

include("dbcon.php");

//these couple lines execute sql queries which gets back all the rows from both tables//
$bouquetSql = "SELECT * FROM bouquet";
$bouquetResult = mysqli_query($conn, $bouquetSql);

$customerSql = "SELECT * FROM customer";
$customerResult = mysqli_query($conn, $customerSql);

//closed off//
mysqli_close($conn);
?>

<html>
<head>
    <title>Flower List</title>
</head>
<body>
    <h2>Bouquet Details</h2>
    <table border='1'>
        <tr>
            <th>Flower ID</th>
            <th>Wrapping Colour</th>
            <th>Number of Flowers</th>
            <th>Flower Colour</th>
            <th>Special Delivery</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($bouquetResult)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['color_of_wrapping']; ?></td>
                <td><?php echo $row['number_of_flowers']; ?></td>
                <td><?php echo $row['color_of_flowers']; ?></td>
                <td>
                    <?php
                        if (isset($row['special_delivery'])) {
                            echo $row['special_delivery'];
                        } else {
                            echo 0;
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>

    <h2>Customer Details</h2>
    <table border='1'>
        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>Date of Birth</th>
            <th>Flower Type</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($customerResult)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_Name']; ?></td>
                <td><?php echo $row['sur_Name']; ?></td>
                <td><?php echo $row['d_o_b']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>