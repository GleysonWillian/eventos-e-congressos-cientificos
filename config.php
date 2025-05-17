<?php

    $dbHost = 'localhost:3306';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'eventos';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno){
    //echo "Erro na conexão: " . $conexao->connect_error;
    //}
    //else {
        //echo "Conexão efetuada com sucesso";
    //}

    if(isset($_POST['submit']))
    {
            /*print_r('CPF: ' . $_POST['cpf']);
            print_r('<br>');
            print_r('Nome:' . $_POST['nome']);
            print_r('<br>');
            print_r('E-mail:' . $_POST['email']);
            print_r('<br>');
            print_r('Senha:' . $_POST['senha']);
            print_r('<br>');
            print_r('Telefone:' . $_POST['telefone']);
            print_r('<br>');
            print_r('Logradouro:' . $_POST['logradouro']);
            print_r('<br>');
            print_r('Complemento:' . $_POST['complemento']);
            print_r('<br>');
            print_r('Cidade:' . $_POST['cidade']);
            print_r('<br>');
            print_r('Estado:' . $_POST['estado']);
            print_r('<br>');
            print_r('País:' . $_POST['pais']);
            print_r('<br>');
            print_r('Titulação:' . $_POST['titulacao']);
            print_r('<br>');
            print_r('Instituição/Universidade:' . $_POST['instituicao']);
            */

        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $logradouro = $_POST['logradouro'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $titulacao = $_POST['titulacao'];
        $instituicao = $_POST['instituicao'];

        $result = mysqli_query($conexao, "INSERT INTO participantes(cpf, nome, email, senha, telefone, logradouro, complemento, cidade, estado, pais, titulacao, instituicao) VALUES ('$cpf', '$nome', '$email', '$senha', '$telefone', '$logradouro', '$complemento', '$cidade', '$estado', '$pais', '$titulacao', '$instituicao')" );

        if ($result) {
            echo "Inscrição realizada com sucesso!"; // Ou redirecione para uma página de sucesso
        } else {
            echo "Erro ao realizar a inscrição: " . mysqli_error($conexao); // Exibe o erro do MySQL para depuração
        }

    }
?>