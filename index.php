<?php
    session_start();
    $lunghezza = '';
    
    if(isset($_GET['lunghezzaPassword']) && ($_GET['lunghezzaPassword'] != '')){
        $lunghezza = $_GET['lunghezzaPassword'];
    };
    
    require_once __DIR__ . '/functions.php';
    $_SESSION['password'] = generaPassword($lunghezza);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Password_Generator</title>
</head>
<body>
    <div class="container bg-primary-subtle">
        <div class="row p-3 mb-2">
            <form action="index.php" method="GET">
                <label for="lunghezzaPassword">
                    Scegli numero caratteri
                </label>
                <input type="number" name="lunghezzaPassword" id="lunghezzaPassword">
                <button type="submit">invia</button>
            </form>
        </div>
        
        <?php if(isset($_GET['lunghezzaPassword']) && ($_GET['lunghezzaPassword'] != '')){
                header('Location: ./password.php'); ?>
            <?php }else{ ?>
                <h2 class="bg-warning-subtle p-3 mb-2">inserisci un numero</h2>
        <?php }?>
    </div>
    
    
    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>