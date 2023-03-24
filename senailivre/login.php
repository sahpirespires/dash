<?php 
    include("conexao.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = " SELECT * FROM usuario WHERE login = :login AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':login',$login);
        $stmt->bindValue(':senha',$senha);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $result = "Pode logar"; 
         }else {
            $result = "Não pode logar";
         }

        echo "<script>alert('{$result}');</script>";
    
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="registro.html">
    <link rel="stylesheet" href="header.html">
    <title>Login</title>
</head>

<body>
    <header>
        <div class="headerlogin">
            <div class="img">
                <img src="assets/img/senai.png" alt="Logo">
            </div>
          
            <div class="hamblogin">
                <div class="button-borders">
                    <a href="header.html"><button class="primary-button">Sair</button></a>
                  </div>
                <svg viewBox="0 0 100 80" width="20" height="20">
                    <rect width="100" height="20"></rect>
                    <rect y="30" width="100" height="20"></rect>
                    <rect y="60" width="100" height="20"></rect>
                  </svg>
            </div>
        
        </div>
    </header>

    <main>
        
        <section id="form" class="form-sem-cachorro">
            <div id="form-texto">
                <h1>Por favor, inscreva-se</h1>
            </div>

            <div id="form-formulario">
                <form action="" method="POST">
                    <div class="form-formulario-email">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" required placeholder="E-mail">
                    </div>

                    <div class="form-formulario-senha">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" required placeholder="Senha">
                    </div>
                    <div class="form-formulario-logar">
                        <button type="submit">Logar</button>
                    </div>
                    <br>
                    <div class="form-formulario-cadastre-se">
                        <a href="registro.html">Ainda não cadastrado? Cadastre-se</a>
                        
                    </div>
                    
                </form>

            </div>
        </section>
    </main>
</body>