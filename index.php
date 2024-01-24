<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form>
        <input type="text" name="length">
        <input type="submit" value="CHECK">
    </form> -->

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

$lunghezza= $_GET["length"];


function randomPassword($pwslen) {
    $caratteri="1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuioplkjhgfdsaxzcvbnm!/£$%&/=?*+-_";
    $password="";
    for ($i=0 ; $i < $pwslen; $i++){
     
        $ind_random = rand(0, strlen($caratteri)-1);
        $car_random = $caratteri[$ind_random];
        $password .= $car_random;
        // echo $car_random;
    }
    return $password;
};


$newPws =  randomPassword($lunghezza);
echo $newPws

?>
</body>
</html>