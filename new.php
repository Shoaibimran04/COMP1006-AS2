<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Vehicle Registration</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Vehicle Registration Form</h1>

                <p>
                    <a href="./index.php" class="btn btn-primary">Back to cars</a>
                </p>
            </header>

            <hr>

            <form class="mt-5" action="./create.php" method="post" novalidate>
                <div class="form-group mb-3">
                    <label for="Identification">Identification:</label>
                    <input type="text" name="Identification" required max="30" class="form-control" placeholder="WBA4B5CDJ67R90">
                </div>

                <div class="form-group mb-3">
                    <label for="Model">Model:</label>
                    <input type="text" name="Model" required max="30" class="form-control" placeholder="328i">
                </div>

                <div class="form-group mb-3">
                    <label for="Brand">Brand:</label>
                    <input type="text" name="Brand" required max="30" class="form-control" placeholder="BMW">
                </div>

                <div class="form-group mb-3">
                    <label for="Year">Year:</label>
                    <input type="date" name="Year" required max="30" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="Description">Description:</label>
                    <input type="text" name="Description" required max="30" class="form-control" placeholder="blue 4 door sedan with 2.5L turbo ">
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-primary">Create</button>
                    <a href="./index.php" class="btn btn-danger">Cancel</a>
                    
                </div>
            </form>
        </div>
    </body>
</html>