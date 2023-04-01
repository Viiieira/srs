<?php

// Start the session
session_start();

// If the user is already logged in, redirect to the welcome page
if (isset($_SESSION['user'])) {
    header('Location: ../welcome/');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- FontAwesome Free 6.2.0 -->
    <link rel="stylesheet" href="../../assets/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="../../assets/fontawesome/brands.css">
    <link rel="stylesheet" href="../../assets/fontawesome/solid.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../assets/styles/main.css">
    <script src="../../assets/scripts/onload_portfolio.js"></script>
</head>

<body>

    <div id="form-wrapper">
        <div class="form-container">
            <div class="form-brand">Savory Bites</div>
            <form action="../../server/login.php" method="post" autocomplete="off">
                <div class="form-input">
                    <label for="emailField">
                        E-mail <span class="text-secondary">*</span>
                    </label>
                    <input type="email" name="email" id="emailField" placeholder="johndoe@company.com" value="<?php if (isset($_SESSION['tempEmail'])) { echo $_SESSION['tempEmail']; unset($_SESSION['tempEmail']); } ?>" required autofocus>
                    <?php if (isset($_SESSION['loginError'])) {
                        echo "<div class='text-danger'>" . $_SESSION['loginError'] . "</div>";
                        unset($_SESSION['loginError']);
                    } ?>
                </div>
                <div class="form-input">
                    <label for="passwordField">Password <span class="text-secondary">*</span></label>
                    <input type="password" name="password" id="passwordField" placeholder="********" required>
                </div>
                <button type="submit" name="loginSubmit">
                    <i class="fa-solid fa-right-to-bracket"></i> Login
                </button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../../assets/scripts/popper.min.js"></script>
    <script src="../../assets/scripts/bootstrap.min.js"></script>
    <script src="../../assets/scripts/portfolio_main.js"></script>
    <script src="../../assets/scripts/portfolio_toggleLight.js"></script>

</body>

</html>