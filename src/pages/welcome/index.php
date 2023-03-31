<?php

// Start the session
session_start();

// Include the database connection file
include_once '../../config/db.php';

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    $_SESSION['messageSuccess'] = "Logout successfully!";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savory Bites</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/main.css">
</head>

<body>

    <h1>
        <ul>
            <li>Gabriela Ribeiro 24600</li>
            <li>Hugo Vieira 24633</li>
        </ul>
    </h1>

    <?php if (isset($_SESSION['messageSuccess'])) {
        echo "<p class=\"success-message\">{$_SESSION['messageSuccess']}</p>";
        unset($_SESSION['messageSuccess']);
    } ?>

    <?php if (!isset($_SESSION['user'])) { ?>
        <a href="../login/">Login</a>
    <?php } else { ?>
        <?php echo "Hello there " . ucfirst($_SESSION['user']['username']); ?>
        <a href="?logout=1">Logout</a>
    <?php } ?>

    <!-- Navbar -->

    <!-- Hero Section -->

    <!-- About Us -->

    <!-- Contacts -->

    <!-- Footer -->

</body>

</html>