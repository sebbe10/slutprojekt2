<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $submitted_garments = $_POST['submitted_garments'];
    $number_of_garments_sold = $_POST['number_of_garments_sold'];
    $total_sales_amount = $_POST['total_sales_amount'];
    $date_add = $_POST['date_add'];
    $sold = $_POST['sold'];

    $sql = "INSERT INTO NOW info (name, type, submitted_garments, number_of_garments_sold, total_sales_amount, date_add, sold) values ('$name', '$type', '$submitted_garments', '$number_of_garments_sold', '$total_sales_amount', NOW(), NOW())";


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
        <h1 style="font-size: 50px; padding:10px 50px;">Secondhand</h1>
    </header>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Skriv ditt namn" name="name" autocapitalize="off" />
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" placeholder="Skriv din typ" name="type" autocapitalize="off" />
            </div>

            <div class="form-group">
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
            </div>
            <!-- 
            <div class="form-group">
                <label>Såld/tillgänglig</label>
                <input type="text" class="form-control" placeholder="Skriv om den är såld/tillgänlig" name="sold" autocapitalize="off" />
            </div> -->


            <button type="submit" class="btn btn-primary" name="submit">Skicka</button>
        </form>
</body>

</html>