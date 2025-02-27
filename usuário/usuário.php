<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuário</title>
</head>
<body>
    <?php 
       include('../bdconfig/config.php');

       error_reporting(E_ALL);
ini_set('display_errors', 1);

       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $foto = $_FILES['foto'];

        if(!isset($conect)){
          die("erro: Conexão com o banco de dados não encontrada!");
        }
        $conect->select_db($bd_name);

        $email = $conect->real_escape_string($email);
        

        $sql= "SELECT email FROM cliente WHERE email='$email'";
        $result = $conect->query($sql);
        
        if ($result->num_rows > 0) {
           
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($foto["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($foto["tmp_name"]);
            if ($check !== false) {
                echo "<script> alert('Arquivo é uma imagem - " . $check["mime"] . "');</script>";
                $uploadOk = 1;
            } else {
                echo "<script> alert('Arquivo não é uma imagem.');</script>";
                $uploadOk = 0;
            }
            if ($foto["size"] > 500000) { 
                echo "<script> alert('Desculpe, seu arquivo é muito grande.');</script>";
                $uploadOk = 0;
            }
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "<script> alert('Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.');</script>";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "<script> alert('Desculpe, seu arquivo não foi enviado.');</script>";
            } else {
                if (move_uploaded_file($foto["tmp_name"], $target_file)) {
                    echo "<script> alert('O arquivo " . basename($foto["name"]) . " foi enviado.');</script>";
    
                    $foto_path = $conect->real_escape_string($target_file);
                    $sql = "UPDATE cliente SET foto='$foto_path' WHERE email='$email'";
                    if ($conect->query($sql) === TRUE) {
                        echo "<script> alert('Foto atualizada no banco de dados.');
                        window.location.href = '../PaginaInicial/inicial.php';
                        </script>";
                    } else {
                        echo "<script> alert('Erro ao atualizar foto no banco de dados: " . $conect->error . "');</script>";
                    }
                } else {
                    echo "<script> alert('Desculpe, houve um erro ao enviar seu arquivo.');</script>";
                }
            }
        } else {
            echo "<script> alert('Email inválido.');</script>";
        }
    }
        
    ?>
</body>
</html>