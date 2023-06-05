<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $sold = $_POST['sold'];

    $sql = "INSERT INTO info (name, type, sold) values($name, $type, $sold)";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data insertted successfully";
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
                <input type="text" class="form-control" placeholder="Skriv ditt namn" name="name" autocapitalize="off" />
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" placeholder="Skriv din typ" name="type" autocapitalize="off" />
            </div>
            <div class="form-group">
                <label>Såld/tillgänglig</label>
                <input type="text" class="form-control" placeholder="Skriv om den är såld/tillgänlig" name="sold" autocapitalize="off" />
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Skicka</button>
        </form>
    </div>

</body>

</html>