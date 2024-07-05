<?php
include("connectadb.php");

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    // começa validar banco de dados
    $sql = "SELECT COUNT(usu_id) FROM tb_usuarios WHERE usu_ = '$login AND usu_senha = '$senha' AND usu_status ='1'";

    // RETORNO DO BANCO
    $retorno = mysqli_query($link, $sql);
    while($tb1 = mysqli_fetch_array($retorno)){
        $contagem = $tb1[0];
    }

    //verificar se natan existe
    if($contagem == 1){
        echo"<script>window.location.href='home.php';</script>";
    }
    else{
        echo"<script>window.alert('USUARIO OU SENHA INCORRETOS');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN USUARIO</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container-global">
       
        <from class="formulario" action="login.php" method="post">
        <img src="img.logo/logo.jfif" width=100px height100px>
            <label>LOGIN</label>
            <br>
            <input type="text" name="txtlogin" required>
            <br>
            <labe>SENHA</label>
            <input type="password" name="txtsenha" required>
            <br>
            <br>

            <input type="submit" value="ACESSAR">

    </div>
</body>
</html>