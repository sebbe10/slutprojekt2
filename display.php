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

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Lägg till användare</a>

        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kläders plagg</th>
                    <th scope="col">Såld/tillgänlig</th>
                </tr>
            </thead>
            <tbody>


                <?php
                $sql = "SELECT * FROM info ORDER BY name";

                $result = $con->query($sql);
                while ($row = $result->fetch_row()) {
                    printf("%s (%s)\n", $row[0], $row[1]);


                    foreach ($result as $now) {
                        foreach ($now as $writeout) {
                            echo "<h5>$writeout</h5>";
                        }
                    }

                    // $name = $row['name'];
                    // $type = $row['type'];
                    // $sold = $row['sold'];
                    // echo '
                    //     <tr>
                    //     <th scope="row">{$id}</th>
                    //     <td>{$name}</td>
                    //     <td>{$type}</td>
                    //     <td>{$sold}</td>
                    //     </tr>';
                }

                ?></tbody>
        </table>
    </div>
</body>

</html>