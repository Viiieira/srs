<?php

session_start();

// If the user tries to enter the login page
// even tho he already logged in
if(isset($_SESSION['user'])) {
    header("Location: ../welcome/");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/styles/main.css">
</head>
<body>

<a href="../welcome/">Voltar atrás <</a>



<div class="login-wrapper">
    <div class="login-form">
        <h1>Login</h1>
        <form action="../../server/login.php" method="POST" autocomplete="off">
            <?php if(isset($_SESSION['errorMessage'])) {
                echo "<p class=\"error-message\">{$_SESSION['errorMessage']}</p>";
                unset($_SESSION['errorMessage']);
            } ?>
            <input type="email" name="email" placeholder="E-mail..." required autofocus>
            <input type="password" name="password" placeholder="Password..." required>
            <button type="submit" name="loginSubmit">Entrar</button>
        </form>
    </div>
</div>

</body>
</html>