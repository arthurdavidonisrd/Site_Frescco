<?php 
session_start();
if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha']))){
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $sql_verification = "SELECT * FROM usuarios_cadastro WHERE email = '$email' and senha = '$senha' and nome  = '$nome' ";

    $consulta = $conexao_db->query($sql_verification);

    if($consulta->num_rows < 1){
        unset($_SESSION['senha']);
        unset($_SESSION['email']);
        unset($_SESSION['nome']);
        header('Location: login.php');
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        header('Location: poslogin.php');

    }

}
else{
    header('Location: login.php');
}
    




?>