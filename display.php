<?php
include 'connect.php';
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

    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Lägg till vara</a>
            <button class="btn btn-primary my-5"><a href="seller.php" class="text-light"> Lägg till säljare</a>


            </button>
            <table style="background:white; width:auto; margin:auto; box-shadow: 0 0.1rem 0.1rem black;" class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Seller id</th>
                        <th scope="col">Förnamn</th>
                        <th scope="col">Kläders plagg</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Såld/tillgänlig</th>
                        <th scope="col">Pris</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $sql = "select info.*, seller.name from info join seller ON seller.id= info.id_seller ORDER BY seller.name";

                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $id = $row['id'];
                            $id_seller = $row['id_seller'];
                            $name = $row['name'];
                            $type = $row['type'];
                            $date_add = $row['date_add'];
                            $sold_available = $row['sold_available'];
                            $price = $row['price'];

                            echo '
                        <tr>                       
                        <th scope="row">' . $id . '</th>
                        <th scope="row">' . $id_seller . '</th>
                        <td>' . $name . '</td>
                        <td>' . $type . '</td>
                        <td>' . $date_add . '</td>
                        <td>' . $sold_available . '</td>
                        <td>' . $price . '</td>
                        <th>
                        <div style="background: lightblue;
                        margin: auto;
                        display: flex;
                        flex-direction: column;
                        align-content: center;
                        justify-content: center;
                        align-items: center;
                        width: 100px;
                        height: 100px;
                        border: 2px solid;">
                        <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light" >Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . ' ">Delete</a></button>
                        </div>
                        </th>
                        </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>
    </div>
</body>

</html>