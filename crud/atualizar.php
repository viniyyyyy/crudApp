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
    $consulta ="SELECT * FROM tb_crud_cliente WHERE id = ?";

    $consulta = $conexao->prepare($consulta);

    $consulta->bindValue(1, $id);

    $consulta->execute();

    try{

    if($consulta->rowCount() = 0){
        echo "Cadastro inexistente";
    } else  {
            
        $str_sql = "UPDATE tb_crud_cliente SET NomeCliente = :NOME, SobreNomeCliente = :SOBRENOME, RGCliente = :RG, CPFCliente = :CPF, 
        LogradouroCliente = :LOGRADOURO, NumeroCliente = :NUMERO, ComplementoCliente = :COMPLEMENTO, BairroCliente = :BAIRRO, CEPCliente = :CEP, UFCliente = :UF, 
        CidadeCliente = :CIDADE, TelefoneCliente = :TELEFONE, EmailCliente = :EMAIL WHERE id = ID";

        $str_salvar = $conexao->prepare($str_sql);
        $str_salvar -> bindParam(':ID', $id);
        $str_salvar -> bindParam(':NOME', $nome);
        $str_salvar -> bindParam(':SOBRENOME', $sobrenome);
        $str_salvar -> bindParam(':RG', $rg);
        $str_salvar -> bindParam(':CPF', $cpf);
        $str_salvar -> bindParam(':LOGRADOURO', $logradouro);
        $str_salvar -> bindParam(':NUMERO', $numero);
        $str_salvar -> bindParam(':COMPLEMENTO', $complemento);
        $str_salvar -> bindParam(':BAIRRO', $bairro);
        $str_salvar -> bindParam(':CEP', $cep);
        $str_salvar -> bindParam(':UF', $uf);
        $str_salvar -> bindParam(':CIDADE', $cidade);
        $str_salvar -> bindParam(':TELEFONE', $telefone);
        $str_salvar -> bindParam(':EMAIL', $email);
        
        $str_salvar->execute();

        echo 'atualizado com sucesso';
        }
        }

        catch(PDOExeption $erro) {
            echo $erro->getMessage();
    
        }
?>
