<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include('../bdconfig/config.php');

        if($_SERVER["REQUEST_METHOD"] == "POST"){
          var_dump($_POST);
          if (isset($_POST['email']) && isset($_POST['password'])) {
            echo "Dados POST recebidos.<br>";
            $email = $_POST['email'];
            $nova_senha = $_POST['password'];
    
            if (!isset($conect)) {
                die("Erro: Conexão com o banco de dados não encontrada!");
            }
            $conect->select_db($bd_name); 

            $email = $conect->real_escape_string($email);
            $nova_senha = $conect->real_escape_string($nova_senha);

            $sql = "SELECT email FROM cliente WHERE email='$email'";
            $result = $conect->query($sql);
          
            if ($result->num_rows > 0) {
              $sql = "UPDATE cliente SET senha='$nova_senha' WHERE email='$email'";
              if ($conect->query($sql) === TRUE) {
                echo "<script> alert('Senha redefinida com sucesso');
                window.location.href = '../login/login.html'; 
                </script>o";
              } else {
                echo "<script>alert('Erro ao redefinir a senha');</script>";
              }
            } else {
              echo "<script>alert('Email inválido');</script>";
            }
            } else {
              echo "Campos email ou password não definidos.<br>";
              echo "<script>alert('Por favor, preencha todos os campos.');</script>";
          }
          }
        
    ?> 
</body>
</html>