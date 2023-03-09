<?php

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=cars";

        $conn = new PDO($dsn, "root", "root");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $error) {
        echo $error->getMessage();
        exit;
        $conn = false;
    }

?>