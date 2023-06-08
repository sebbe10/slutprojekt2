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
        <h1 style="font-size: 50px; padding:10px 50px;">Secondhand</h1>
    </header>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Lägg till användare</a>

        </button>
        <table style="background:white; width:auto; margin:auto;" class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kläders plagg</th>
                    <th scope="col">Inlämmnade plagg</th>
                    <th scope="col">Antal sålda plagg</th>
                    <th scope="col">Totala försäljningssumman</th>
                    <th scope="col">Datum</th>
                    <th scope="col">Såld/tillgänlig</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM info ORDER BY name";

                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['id'];
                        $name = $row['name'];
                        $type = $row['type'];
                        $submitted_garments = $row['submitted_garments'];
                        $number_of_garments_sold = $row['number_of_garments_sold'];
                        $total_sales_amount = $row['total_sales_amount'];
                        $date_add = $row['date_add'];
                        $sold_available = $row['sold_available'];
                        echo '
                        <tr>                       
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $type . '</td>
                        <td>' . $submitted_garments . '</td>
                        <td>' . $number_of_garments_sold . '</td>
                        <td>' . $total_sales_amount . '</td>
                        <td>' . $date_add . '</td>
                        <td>' . $sold_available . '</td>
                        <th>
                        <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light" >Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . ' ">Delete</a></button>
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