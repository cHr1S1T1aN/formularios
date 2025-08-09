<?php
var_dump($_POST);
    $nome1 = $_POST["nome"];
    $city = $_POST["cidade"];
    echo "<br>".$city."<br>";
    if ($city == "a"){
        echo "coloque uma cidade direto";
    }else{
        echo "cidade ok";
    }
?>