<?php

    // Create a new Vehicle in the database

    require_once("./connect.php");

    $sql = "INSERT INTO cars(
        :Identification,
        :Model,
        :Brand,
        :Year,
        :Description

    ) VALUES (
        :Identification,
        :Model,
        :Brand,
        :Year,
        :Description
    )";   
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":Identification", $_POST["Identification"],
    PDO::PARAM_STR);
    $stmt->bindParam(":Model", $_POST["Model"],
    PDO::PARAM_STR);
    $stmt->bindParam(":Brand", $_POST["Brand"],
    PDO::PARAM_STR);
    $stmt->bindParam(":Year", $_POST["Year"], PDO:: PARAM_STR);
    $stmt->bindParam(":Description", $_POST["Description"], PDO::PARAM_STR);
    $stmt->execute();
    header("Location: ./index.php");


?>