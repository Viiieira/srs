<?php

// Start the session
session_start();

// Include the database connection file
include_once '../config/db.php';

if(isset($_POST['loginSubmit'])) {
    // Get the data from the form
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Check if the user exists
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        // User exists
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Create a session
        $_SESSION['user'] = $user;

        // Redirect to the welcome page
        header('Location: ../pages/welcome/');
    } else {
        // User does not exist
        $_SESSION['errorMessage'] = "Username or password incorrect!";
        header('Location: ../pages/login/');
    }

}

?>