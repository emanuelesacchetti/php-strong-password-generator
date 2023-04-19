<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 class="bg-success p-3 mb-2">la tua password è:
        <?php foreach($_SESSION['password'] as $singolo){
            echo $singolo;
            }; 
        ?>
    </h2>
    <a href="index.php">Torna alla homepage</a>
</body>
</html>