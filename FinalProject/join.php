<?php
/*
    File: join.php
    Name: Di Luo
    Class: CS 325, January 2022
    Final Project
    Due data: Jan. 27, 2022
*/

$name = $_POST["name"];
$email = $_POST["email"];
$tshirt = $_POST["tshirt"];
$activity = implode("", $_POST["activity"]);
$time = $_POST["time"];

try {
    $db = new PDO("mysql:dbname=dluo22;host=localhost", "dluo22", "401147");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $command = "INSERT INTO enable (name, email, tshirt, activity, time)
    VALUES ('".$name."', '".$email."', '".$tshirt."', '".$activity."', '".$time."')";
    $db->exec($command);
    echo "Your answer is recorded.";
}
catch (PDOException $ex) {
    echo "A database error occurred. Please try again later. Error message: ".$ex->getMessage();
}
?>