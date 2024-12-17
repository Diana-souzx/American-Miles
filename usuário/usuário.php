<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuário</title>
</head>
<body>
    <?php 
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $senha = intval($_POST['senha'])
        
        $dados = [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha,
            'foto' => $fotoURL,
        ];
    ?>
</body>
</html>