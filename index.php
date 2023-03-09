<?php


    $sql = "SELECT  
        id, Model, Brand, Year, Description, 
    FROM 
        cars";

    require_once("./connect.php");

    $rows = [];

    if ($conn){
        $rows = $conn->query($sql)->fetchAll(PDO::FETCH_OBJ);

    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="./styles.css" rel="stylesheet">
        <title>CARS</title>
    </head>
   
    <body>
        
        <div class="container">
            <header class="mt-3">
                <h1 class="text-center display-1">AutoZone</h1>
                <h2 class="text-center">vehicle registration form</h2>
                <p>
                    <a href="./new.php" class="btn btn-primary">New Vehicle</a>
                </p>
            </header>

            <hr>

            <table class="table table-striped table-dark table-bordered">
                <thead class="table-light">
                    <tr class="align-middle text-center">
                        <th>Identification</th>
                        <th>Model</th>
                        <th>Brand</th>
                        <th>Year</th>
                        <th>Description</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Displays cars in rows -->
                    <?php foreach($rows as $row): ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["Model"] ?></td>
                            <td><?= $row["Brand"]?></td>
                            <td><?= $row->Year ?></td>
                            <td><?= $row->Description ?></td>
                            <td>
                            <a href="./edit.php?id=<?= $row->id ?>">edit</a>
                            <a href="./delete.php?id=<?= $row->id ?>" onclick="return confirm('Are you sure you want to delete this from the table')">delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>