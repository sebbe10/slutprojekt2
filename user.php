<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $id_seller = $_POST['id_seller'];
    $type = $_POST['type'];
    $sold_available = $_POST['sold_available'];
    $price = $_POST['price'];

    $sql = "INSERT INTO info (type, date_add, id_seller, price) values ('$type', NOW(), '$id_seller', '$price')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Data insertted successfully";
        header('Location:display.php');
    } else {
        die(mysqli_error($con));
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secondhand</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body style="background:lightblue;">
    <header style="background: white; border:10px solid lightblue; ">
        <h1 style="font-size: 50px; padding:10px 50px; border-bottom:2px solid black; font-style:italic">Secondhand</h1>
    </header>

    <div class="container my-5">
        <form method="post">

            <div class="form-group">
                <label>Id seller</label>
                <input type="text" class="form-control" placeholder="Skriv ditt Id seller" name="id_seller" autocapitalize="off" />
            </div>

            <!-- <div class="form-group">
                <label>Förnamn</label>
                <input type="text" class="form-control" placeholder="Skriv ditt namn" name="name" autocapitalize="off" />
            </div> -->
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" placeholder="Skriv din typ" name="type" autocapitalize="off" />
            </div>

            <div class="form-group">
                <label>Pris</label>
                <input type="text" class="form-control" placeholder="Skriv priset" name="price" autocapitalize="off" />
            </div>

            <!-- <div class="form-group">
                <label>Inlämmnade plagg</label>
                <input type="number" class="form-control" placeholder="Skriv alla Inlämmnade plagg" name="submitted_garments" autocapitalize="off" />
            </div>

            <div class=" form-group">
                <label>Antal sålda plagg</label>
                <input type="number" class="form-control" placeholder="Skriv antal sålda plagg" name="number_of_garments_sold" autocapitalize="off" />
            </div>

            <div class="form-group">
                <label>Totala försäljningssumman</label>
                <input type="number" class="form-control" placeholder="Skriv totala försäljningssumman" name="total_sales_amount" autocapitalize="off" />
            </div> -->

            <button type="submit" class="btn btn-primary" name="submit">Skicka</button>
            <button class="btn btn-danger"><a href="display.php" class="text-light">Tillbaka</a></button>
        </form>
</body>

</html>