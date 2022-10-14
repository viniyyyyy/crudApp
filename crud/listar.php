<?php
    require "conexao.php";

    $consulta = "SELECT * FROM tb_crud_cliente";
    // Criando um Statement ou Query
    $stmt_listar = $conexao->prepare($consulta);
    //excecults s intrução
    $stmt_listar->execute();
        $cliente = array();
        //FIT RTORNA UMA LISTA E M OBJETO
        WHILE($registro = $stmt_listar->fetch(PDO::FETCH_OBJ)){
            $cliente[] = array("ID"=>$registro->id,"NOME"=>$registro->NomeCliente
        ,"SOBRENOME"=>$registro->SobreNomeCliente,"RG"=>$registro->RGCliente,"CPF"=>$registro->CPFCliente
        ,"LOGRADOURO"=>$registro->LogradouroCliente,"NUMERO"=>$registro->NumeroCliente,"COMPLEMENTO"=>$registro->ComplementoCliente
        ,"BAIRRO"=>$registro->BairroCliente,"CEP"=>$registro->CEPCliente,"UF"=>$registro->UFCliente
        ,"CIDADE"=>$registro->CidadeCliente,"TELEFONE"=>$registro->TelefoneCliente,"EMAIL" =>$registro->EmailCliente);
        }
        echo json_encode($cliente);
?>