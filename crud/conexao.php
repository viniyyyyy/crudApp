<?php 
$DSN = "mysql:host=fdb30.awardspace.net;dbname=3771355_wpress2759b2dc;charset=utf8";
$usuario ="3771355_wpress2759b2dc";
$senha = "1234567890abc." ;

try {

    $conexao = new PDO($DSN,$usuario,$senha);

    echo "Conectou com sucesso, bobinho!";

    } catch(PDOExeption $erro) {
        echo $erro->getMessage();

        exit;
    }

?>