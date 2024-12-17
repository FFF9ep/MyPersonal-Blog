<?php

try {
    $host = "localhost";
    $dbname = "MyBlog";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if ($conn == true) {
    //     echo "Connected to the database";
    // } else {
    //     echo "Failed to connect to the database";
    // }
} catch (PDOException $e) {
    echo $e->getMessage();
}
