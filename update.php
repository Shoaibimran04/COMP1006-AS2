<?php

    // Update the specified vehicle
    require_once("./connect.php");


    $sql = "UPDATE vehicle SET 
        Identification = :Identification,
        Model = :Model,
        Brand = :Brand,
        Year = :Year,
        Description = :Description
        WHERE Identification = :Identification";

    $stmt = $conn->prepare($sql);


    $stmt->bindParam(":Identification", $_POST["Identification"], 
    PDO::PARAM_STR);
    $stmt->bindParam(":Model", $_POST["Model"], 
    PDO::PARAM_STR);
    $stmt->bindParam(":Brand", $_POST["Brand"], 
    PDO::PARAM_STR);
    $stmt->bindParam(":Year", $_POST["Year"], 
    PDO::PARAM_STR);
    $stmt->bindParam(":Description", $_POST["Description"], PDO::PARAM_STR);
    $stmt->execute();
    header("Location: ./index.php");


?>
