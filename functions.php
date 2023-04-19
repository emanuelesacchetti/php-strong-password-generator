<?php

session_start();

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


