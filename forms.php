<?php
var_dump($_POST);
    $nome1 = $_POST["nome"];
    $city = $_POST["cidade"];
    echo "<br>".$city."<br>";
    try{
    if (!empty($city)){
         throw new Exception("Cidade ok");
    }
        if(strlen($_POST["cidade"] < 3)){
            throw new Exception("sua cidade tem menos de 3 caracteres!");
    }else{
        throw new Exception("Cidade Incorreta");
    }
    }catch(Exception $e){
            echo $e -> getMessage();
        }
?>