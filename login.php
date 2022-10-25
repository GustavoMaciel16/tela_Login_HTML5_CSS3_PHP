<?php
session_start();

$alert = "<script>alert('Email enviado com Sucesso!);</script>";

try {
    $user_default = "Unopar";
    $password_default = "adsead";

    $user_input = $_POST["usuario"];
    $password_input = $_POST["senha"];

    if($user_input == $user_default)
    {
        if($password_input == $password_default)
        {
            $_SESSION["user_login"] = $user_input;
            header("Location: index.php");

        } else {       
        header("Refresh: 0; form.php?error=true");
        echo '<script type="text/javascript">
        alert("Usuário e/ou senha incorretos!");
        </script>';
        }
    
    } else {
        header("Refresh: 0; form.php?error=true");
        echo '<script type="text/javascript">
        alert("Usuário e/ou senha incorretos!");
        </script>';
}

} catch(Exception $e) {
    echo $e->getMessage();
}
?>
    
