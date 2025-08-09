<?php
var_dump($_POST);
    $nome1 = $_POST["nome"];
    $city = $_POST["cidade"];
    echo "<br>".$city."<br>";
    if ($city){
        echo "cidade incorreta";
    }else{
        echo "cidade ok";
    }
?>