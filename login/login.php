<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
        include('../bdconfig/config.php');

        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $email = $_POST['email'];
          $senha = $_POST['password'];

          if(!isset($conect)){
            die("erro: Conexão com o banco de dados não encontrada!");
          }
          $conect->select_db($bd_name);

          $email = $conect->real_escape_string($email);
          $senha = $conect->real_escape_string($senha);

          $sql = "SELECT * FROM cliente WHERE email='$email' ";
          $result = $conect->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
           
            if ($senha === $row['senha']) {
              echo"<script> alert('Login realizado com sucesso');
                  window.location.href = '../PaginaInicial/inicial.php'; 
                  </script>";
            } else {
              echo "<script> alert('Senha incorreta');</script>";
            }
          }else {    
            echo "<script> alert('Usuário não encontrado');</script>";
          }
        }
        
   
    ?>
</body>
</html>