<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

require_once __DIR__ . "/partials/functions.php";

session_start();
$newPsw = $_SESSION['newPsw'];


?>
</head>
<body>
<h1>
<?php

echo $newPsw;

?>
</h1>

</body>
</html>