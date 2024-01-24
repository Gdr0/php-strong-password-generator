<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

require_once __DIR__ . "/partials/functions.php";

session_start();

?>
</head>
<body>


    <form>
    <select name="length">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
    </select>
    <input type="submit" value="FILTER">
</form>
<?php



if (isset($_GET["length"])) {
    $lunghezza = $_GET["length"];

 
    $newPsw = randomPassword($lunghezza);
    $_SESSION['newPsw'] = $newPsw;
    header('Location: ./password.php');
}

?>
</body>
</html>