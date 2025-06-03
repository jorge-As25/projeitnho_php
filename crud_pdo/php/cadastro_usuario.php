<?php
    require_once 'conexao.php';

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (!empty($email) && !empty($nome) && !empty($senha)) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (email, nome, senha) VALUES (:email, :nome, :senha)";

        $requisicao = $conexao ->prepare($sql);

        $requisicao ->bindParam(':email', $email);

        $requisicao ->bindParam(':nome', $nome);

        $requisicao ->bindParam(':senha', $senhaHash);

        try{
            $requisicao->execute();
            echo 'usuario cadastrado com sucesso!';
        }catch(PDOException $e){
            echo "erro ao cadastrar" . $e->getMessage();

        }



    }else{
        echo '<p> style="color:red;"> preencha todos os campos';   
    }



?>