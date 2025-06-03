<?php
    //declarando as variaveis que vamos utlizar 
    $host = 'localhost';
    $nomeBanco = 'crud_pdo';
    $usuario = 'root';
    $senha = "";

    //criar um novo objeto que conecta no banco de dados
    //vamos usar o PDO para isso, passando as variaveis 
    //acima como parametro.
    try {
        $conexao =  new PDO(
            "mysql:host=$host;
            dbname = $nomeBanco;cahrset=UTF-8",
            $usuario,
            $senha,
        );

        //deifne como o PDO vai tratar o erro 
        // no caso, vai lançar uma exceção, que 
        // posteriomente sera tratada no catch

        $conexao ->setAttribute
        (PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);

        echo "conexão realizada com êxito! <br><hr><br>";

    } catch (PDOException $e){
        echo "ERRO" .$e->getMessage();
    }

?>