<?php

    $hostname = 'localhost';
    $bd_user= 'root';
    $bd_name = 'americanmiles';
    $bd_password = 'Diana0798*';

    $conect = new mysqli($hostname, $bd_user, $bd_password);

    if($conect->connect_error){
        die("erro na conexão: " . $conect -> connect_error);
    }

    

?>