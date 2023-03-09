<?php

    // Remove the specified vehicle from the database
    require_once("./connect.php");
    $sql = "DELETE FROM Vehicle WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $stmt->execute();


    header("Location: ./index.php");

?>