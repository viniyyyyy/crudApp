<?php

    require "conexao.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    //vai atualizar dados da tabela  
        $str_sql = "UPDATE tb_crud_cliente SET NomeCliente = :nome, SobreNomeCliente = :sobrenome, RGCliente = :rg, CPFCliente = :cpf, 
        LogradouroCliente = :logradouro, NumeroCliente = :numero, ComplementoCliente = :complemento, BairroCliente = :bairro, CEPCliente = :cep, UFCliente = :uf, 
        CidadeCliente = :cidade, TelefoneCliente = :telefone, EmailCliente = :email WHERE id = :id";

        $str_salvar = $conexao->prepare($str_sql);
        $str_salvar -> bindParam(':id', $id);
        $str_salvar -> bindParam(':nome', $nome);
        $str_salvar -> bindParam(':sobrenome', $sobrenome);
        $str_salvar -> bindParam(':rg', $rg);
        $str_salvar -> bindParam(':cpf', $cpf);
        $str_salvar -> bindParam(':logradouro', $logradouro);
        $str_salvar -> bindParam(':numero', $numero);
        $str_salvar -> bindParam(':complemento', $complemento);
        $str_salvar -> bindParam(':bairro', $bairro);
        $str_salvar -> bindParam(':cep', $cep);
        $str_salvar -> bindParam(':uf', $uf);
        $str_salvar -> bindParam(':cidade', $cidade);
        $str_salvar -> bindParam(':telefone', $telefone);
        $str_salvar -> bindParam(':email', $email);

        if($str_salvar->execute())
            echo "Cadastro salvo com sucesso!";
?>
