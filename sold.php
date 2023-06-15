<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM info WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$sold_available = (int)$row['sold_available'];

if (isset($_POST['submit'])) {
    $sold_available = $_POST['sold_available'];

    $sql = "UPDATE `info` set id='$id',
    sold_available=NOW()
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

<body style="background:lightblue;">
    <header style=" background: white; border:10px solid lightblue; ">
        <h1 style=" font-size: 50px; padding:10px 50px; border-bottom:2px solid black; font-style:italic">Secondhand</h1>
    </header>

    <div class="container my-5" id="isthatsold" style="
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
    border:2px solid black;
    width:200px;
    box-shadow: 0 0.1rem 0.1rem black;
    ">
        <form method="post">
            <div class="form-group">
                <div style="display: flex; justify-content:center; align-items: center; flex-direction: column; ">
                    <label style="font-style:italic; font-size:25px">Tillgänlig/Såld</label>
                    <input style=" width:50px; height:100px;" type="checkbox" placeholder="Skriv priset" name="sold_available" autocapitalize="off" />
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Skicka</button>
            <button class="btn btn-danger"><a href="display.php" class="text-light">Tillbaka</a></button>
        </form>
    </div>

</body>

</html>