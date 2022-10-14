<?php

    require "conexao.php";

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

    $consulta ="SELECT * FROM tb_crud_cliente WHERE EmailCliente = ?";

    $consulta = $conexao->prepare($consulta);

    $consulta->bindValue(1, $email);

    $consulta->execute();

    try{

    if($consulta->rowCount() > 0){
        echo "Ja possui cadastro!";
    } else  {
       
        $str_sql = "INSERT INTO tb_crud_cliente (NomeCliente, SobreNomeCliente, RGCliente, CPFCliente, LogradouroCliente, NumeroCliente, ComplementoCliente, BairroCliente, CEPCliente, UFCliente, CidadeCliente, TelefoneCliente, EmailCliente) ";
        $str_sql = $str_sql . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?) ";

        $str_salvar = $conexao->prepare($str_sql);
        $str_salvar -> bindValue(1, $nome);
        $str_salvar -> bindValue(2, $sobrenome);
        $str_salvar -> bindValue(3, $rg);
        $str_salvar -> bindValue(4, $cpf);
        $str_salvar -> bindValue(5, $logradouro);
        $str_salvar -> bindValue(6, $numero);
        $str_salvar -> bindValue(7, $complemento);
        $str_salvar -> bindValue(8, $bairro);
        $str_salvar -> bindValue(9, $cep);
        $str_salvar -> bindValue(10, $uf);
        $str_salvar -> bindValue(11, $cidade);
        $str_salvar -> bindValue(12, $telefone);
        $str_salvar -> bindValue(13, $email);

        $str_salvar->execute();

            echo "Cadastro salvo com sucesso!";

    }
}
    catch(PDOExeption $erro) {
        echo $erro->getMessage();

    }

?>
