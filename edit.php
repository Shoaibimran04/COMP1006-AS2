<?php

    // Fetch vehicle with provided ID

    
    $sql = "SELECT  
        Identification, Model, Brand, Year, Description
    FROM 
        Vehicle WHERE id=:id";

    require_once("./connect.php");

    $rows = [];
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(":id",$_GET["id"],PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Edit Vehicle</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Edit Vehicle Form</h1>

                <p>
                    <a href="./index.php">Back to Cars</a>
                </p>
            </header>

            <hr>

            <!-- Populate the values in the form with the retrieved villain -->
            <form class="mt-5" action="./update.php" method="post" novalidate>
                <input type="hidden" name="id" value="<?=$rows->id?>">

                <div class="form-group mb-3">
                    <label for="Identification">Identification:</label>
                    <input type="text" name="Identification" required max="30" class="form-control" placeholder="WBA4B5CDJ67R90"  value="<?=$rows->Identification?>">
                </div>

                <div class="form-group mb-3">
                    <label for="Model">Model:</label>
                    <input type="text" name="Model" required max="30" class="form-control" placeholder="328i" value=" <?=$rows->Model?>">
                </div>

                <div class="form-group mb-3">
                    <label for="Brand">Brand:</label>
                    <input type="text" name="Brand" required max="30" class="form-control" placeholder="BMW" value=" <?=$rows->Brand?>">
                </div>

                <div class="form-group mb-3">
                    <label for="Year">Year:</label>
                    <input type="datetime" name="Year" required max="30" class="form-control" value="<?=$rows->Year?>">
                </div>

                <div class="form-group mb-3">
                    <label for="Description">Description:</label>
                    <input type="text" name="Description" required max="30" class="form-control" placeholder="blue 4 door sedan with 2.5L turbo" value="<?=$rows->Description?>">>
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </body>
</html>