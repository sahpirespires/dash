<?php
    include("../config/cabecalho.php");
?>

<form action="" method="POST">
    <label for="nome">nome</label>
    <input type="nome" name="nome" id="nome" placeholder="Informe seu nome:" required >

    <label for="email">email</label>
    <input type="text" name="email" id="email" placeholder="Informe seu email:" required >

    <label for="login">login</label>
    <input type="text" name="login" id="login" placeholder="Informe seu login:" required >

    <label for="senha">senha</label>
    <input type="password" name="senha" id="senha" placeholder="Informe sua senha:" required >

    <button type="submit">Enviar</button>
    <button type="delete">Limpar</button>
</form>

<?php
    include("../conexao.php");
?>


<?php
    include("../config/rodape.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "insert into usuario(nome,email,senha) values (:nome,:email, :login, :senha)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue(':email',$email);
        $stmt->bindValue(':login',$login);
        $stmt->bindValue(':senha',$senha);
        $result->execute();

        if($stmt->rowCount() > 0){
           echo "Registrdo com sucesso"; 
        }else {
            echo "Falha ao registra usuario";
        }



    }
?>