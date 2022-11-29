<?php
/*
    File: Lab10_dluo22.php
    Name: Di Luo
    Class: CS 325, January 2022
    Lab: 10
    Due data: Jan. 25, 2022
*/
session_start();

$_SESSION["name"] = $_GET["name"];
$_SESSION["password"] = $_GET["password"];
$_SESSION["database"] = $_GET["database"];

try {
    $db = new PDO("mysql:dbname=".$_SESSION["database"].";host=localhost", $_SESSION["name"], $_SESSION["password"]);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Database <?= $_SESSION["database"] ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Lab10_dluo22.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="Lab10_dluo22.js"></script>
    </head>
    <body>
        <h1 id="notification">Database query "use <?= $_SESSION["database"] ?>" was successful.</h1>
        <form id="command">
        <fieldset>
            <legend>Type in a MySQL command</legend>

            <textarea name="command" form="command" rows="10" cols="40" required></textarea> <br />

            <input type="checkbox" name="limit" id="limit" value="limit" />
            <label class="heading" for="limit">Limit Number of Rows to 10</label><br />

            <input type="submit" value="Submit" />
        </fieldset>
        </form>
    </body>
</html>
<?php
}
catch (PDOException $ex) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Failed</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Lab10_dluo22.css" />
    </head>
    <body>
        <h1>Error details: <?= $ex->getMessage() ?></h1>
        <a href="Lab10_dluo22.html">Retry</a>
    </body>
</html>
<?php
}
?>