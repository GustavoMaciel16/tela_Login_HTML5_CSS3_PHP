<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esse é um projeto de uma tela de login, que coleta os dados inseridos pelo usuário e os manda, através do método POST, para um arquivo de extensão PHP. Depois, o arquivo PHP exibe as informações para usuário na tela se o login for aprovado.">
    <meta name="keywords" content="Login form, php, css3, html5, js, web developtment">
    <meta name="author" content="Gustavo Maciel Resende">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/41586de03b.js" crossorigin="anonymous"></script>
    <link rel="sortcut icon" href="img/slogan.png">
    <title>Fórum | Login</title>
</head>
<body>
    <form action="login.php" method="POST">

        <label class="lb_title_h2" for="div_title_h2"></label>
    <div class="div_title_h2">
        <h2>Login</h2>
    </div>

    <label class="lb_user" for="div_user"><i class="fa-solid fa-user"></i></label>
    <div class="div_user">
        <input type="text" name="usuario" id="inp_user" placeholder="Usuário" required><br><br>
    </div>

    <label class="lb_password" for="div_password"><i class="fa-solid fa-lock"></i></label>
    <div class="div_password">
        <input type="password" name="senha" id="inp_password" placeholder="Senha" required>
    </div><br>

    <div class="div_submit">
        <input type="submit" name="enviar" id="inp_submit" value="ENVIAR" style="font-family: Arial; font-weight: 600; ">
    </div>

    <div class="div_reset">
        <input type="reset" name="reset" id="inp_reset" value="CANCELAR" style="font-family: Arial; font-weight: 600; font-size: 12px">
    </div>

</div><br><br><br>
    <label class="lb_text_h3" for="div_text_h3"></label>
    <div class="div_text_h3">
        <h3 style="color: rgb(79, 87, 96); font-family: Arial;">Não é membro?<a href="mailto:gumacielresendedev@gmail.com?subject=Solicitação%20de%20cadastro" style="text-decoration:none; color:rgb(255, 255, 255);">  Entrar em contato</a></h3>
    </div>

</form>

<script>
</script>
    
</body>
</html>

