<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM info WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$type = $row['type'];
$submitted_garments = (int)$row['submitted_garments'];
$number_of_garments_sold = (int)$row['number_of_garments_sold'];
$total_sales_amount = (int)$row['total_sales_amount'];
// $date_add = $row['date_add'];
// $sold = $row['sold'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $submitted_garments = (int)$_POST['submitted_garments'];
    $number_of_garments_sold = (int) $_POST['number_of_garments_sold'];
    $total_sales_amount = (int)$_POST['total_sales_amount'];
    // $date_add = $_POST['date_add'];
    // $sold = $_POST['sold'];

    $sql = "UPDATE `info` set id='$id',
     name='$name',
     type='$type',
     submitted_garments='$submitted_garments',
     number_of_garments_sold='$number_of_garments_sold',
     total_sales_amount='$total_sales_amount',
    --  date_add='$date_add';
    --  sold='$sold'
    WHERE id=$id";


    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Updated succssfully";
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

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Skriv ditt namn" name="name" autocapitalize="off" value=<?php echo $name ?> />
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" placeholder="Skriv din typ" name="type" autocapitalize="off" value=<?php echo $type ?> />
            </div>


            <div class="form-group">
                <label>Inlämmnade plagg</label>
                <input type="number" class="form-control" placeholder="Skriv alla Inlämmnade plagg" name="submitted_garments" autocapitalize="off" value=<?php echo $submitted_garments ?> />
            </div>

            <div class=" form-group">
                <label>Antal sålda plagg</label>
                <input type="number" class="form-control" placeholder="Skriv antal sålda plagg" name="number_of_garments_sold" autocapitalize="off" value=<?php echo $number_of_garments_sold ?> />
            </div>

            <div class="form-group">
                <label>Totala försäljningssumman</label>
                <input type="number" class="form-control" placeholder="Skriv totala försäljningssumman" name="total_sales_amount" autocapitalize="off" value=<?php echo $total_sales_amount ?> />
            </div>

            <div class="form-group">
                <label>Såld/tillgänglig</label>
                <input type="text" class="form-control" placeholder="Skriv om den är såld/tillgänlig" name="sold" autocapitalize="off" value=<?php echo $sold ?> />
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Skicka</button>
        </form>
    </div>

</body>

</html>