<?php
session_start();

if(!isset($_SESSION["user_login"]))
header("Location: form.php");

if(isset($_GET["loggout"])) {
    unset($_SESSION["user_login"]);
    header("Location: form.php");
}

?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esse é um projeto de uma tela de login, que coleta os dados inseridos pelo usuário e os manda, através do método POST, para um arquivo de extensão PHP. Depois, o arquivo PHP exibe as informações para usuário na tela se o login for aprovado.">
    <meta name="keywords" content="Login form, php, css3, html5, js, web developtment">
    <meta name="author" content="Gustavo Maciel Resende">
    <link rel="sortcut icon" href="img/slogan_2.png">
    <title>Fórum | Bem-Vindo</title>
    </head>
<body>
<h1 style="text-align: center;font-family: 'Arial', sans-serif; font-size: 28px">Seja bem-vindo (a), Unopar!</h1>
<div class="div_submit_loggout" style="text-align:center">
<a href="index.php?loggout=true"><input type="submit" name="enviar" id="inp_submit" value="DESCONECTAR" style="font-family: Arial; font-weight: 600; cursor: pointer; width: 160px; height: 38px; border:0px solid; border-radius: 3px; background-color:#2a2e33; color:white" onclick="index.php?loggout=true"></a></div>


</body>
