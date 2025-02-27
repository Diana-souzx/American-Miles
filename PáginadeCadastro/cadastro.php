<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro realizado</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>

<?php

    include('../bdconfig/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['password'];

        if(!isset($conect)){
            die("erro: Conexão com o banco de dados não encontrada!");
        }
        $conect->select_db($bd_name);

        $check_email= $conect->prepare("SELECT email FROM Cliente WHERE email = ?");

        $sql= "INSERT INTO Cliente (nome, email, senha) 
        VALUES(?,?,?)";

        $stmt= $conect->prepare($sql);
        $stmt -> bind_param("sss", $nome, $email, $senha);

        if($check_email === false){
            die("Erro ao preparar consulta para verificar o email");
        }

        $check_email ->bind_param("s",$email);
        $check_email ->execute();
        $check_email -> store_result();

        if($check_email->num_rows > 0 ){
            echo"<script> alert('esse email já foi cadastrado'); </script>";
        }else{
            $sql= "INSERT INTO Cliente (nome, email, senha) 
            VALUES(?,?,?)";
            if($stmt === false){
                die("erro ao preparar consulta de inserção");
            }
            if($stmt -> execute()){
                echo"<script> alert('cadastro realizado com sucesso');
                window.location.href = '../login/login.html'; 
                </script>";
            }else{
                echo"<script> alert('Erro ao cadastrar usuário: ". $stmt->error . "'); 
                </script>";            }
        }

        if (isset($check_email)){
            $check_email ->close();
        }
        if(isset($stmt)){
            $stmt->close();
        }
        $conect->close();


    }

?>
</body>
</html>
