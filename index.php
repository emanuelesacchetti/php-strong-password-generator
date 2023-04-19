<?php

    $lunghezza = '';
    
    if(isset($_GET['lunghezzaPassword']) && ($_GET['lunghezzaPassword'] != '')){
        $lunghezza = $_GET['lunghezzaPassword'];
    };
    
    function generaPassword($nIter){
        $caratteri = ['a','b','c','d','E','F','G','H','@','#','?','!'];
        $password = [];
        
        for( $i = 0; $i < ($nIter); $i++){
            $position = rand(0, 10);
            $password[] = $caratteri[$position];
            
        };

        foreach($password as $singolo){
            echo $singolo;
        };
        /*
        echo "<pre>";
        var_dump($singolo);
        echo "</pre>";
        */
        return $password;
    };

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
    <div class="container">
        <form action="index.php" method="GET">
            <label for="lunghezzaPassword">
                Scegli numero caratteri
            </label>
            <input type="number" name="lunghezzaPassword" id="lunghezzaPassword">
            <button type="submit">invia</button>
        </form>
    </div>
    
    <?php 
        if(isset($_GET['lunghezzaPassword']) && ($_GET['lunghezzaPassword'] != '')){
        ?>
            <h2>la tua password è:<?php generaPassword($lunghezza); ?></h2>
        <?php }else{ ?>
            <h2>inserisci un numero</h2>
        <?php }?>
    
    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>