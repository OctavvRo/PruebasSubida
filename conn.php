<?php
include("datos.php");

function conectDb($host, $user, $password, $bd){

    $connection =mysqli_connect($host,$user,$password,$bd);
    if($connection){
        echo "<p>Se conecto</p>";
    }else{
        echo "<p>No se conecto</p>";

    }

}



?>
