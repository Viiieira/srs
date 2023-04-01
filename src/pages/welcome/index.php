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
    <!-- FontAwesome Free 6.2.0 -->
    <link rel="stylesheet" href="../../assets/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="../../assets/fontawesome/brands.css">
    <link rel="stylesheet" href="../../assets/fontawesome/solid.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/styles/portfolio.css">
    <script src="../../assets/scripts/onload_portfolio.js"></script>
</head>

<body>

    <!-- Navbar -->
    <?php require "../../components/navbar.php"; ?>

    <!-- Hero Section -->
    <header id="hero">
        <div class="info">
            <h1><span class="colored">A taste of tradition</span></h1>
            <h3>Experience the timeless flavors of our savory bites and make memories that last.</h3>
            <div id="go-down">
                <button onclick="window.location.href='#about-me'"><i class="fa-solid fa-arrow-down"></i> See more</button>
            </div>
        </div>
    </header>

    <!-- About Us -->
    <section id="about-me">
        <h1>More <span class="colored">About Us</span></h1>

        <div id="about-me-container">
            <!-- Mais Sobre Mim -->
            <div class="about-me-card">
                <h3>
                    <p>our</p>
                    <span class="colored">story</span>
                </h3>
                <div class="about-me-info">
                    <p>Our story began in a small kitchen, where our founder spent hours experimenting with different ingredients and flavors.</p>
                    <p>Through trial and error, he discovered a few recipes that were too good not to share.</p>
                </div>
            </div>

            <div class="about-me-card">
                <h3>
                    <p>our</p>
                    <span class="colored">mission</span>
                </h3>
                <div class="about-me-info">
                    <p>To achieve our mission, we focus on a few key principles: quality ingredients, bold flavors, and exceptional service.</p>
                    <p>We believe that every bite should be a delight, and we work hard to make that happen.</p>
                </div>
            </div>

            <div class="about-me-card">
                <h3>
                    <p>our</p>
                    <span class="colored">team</span>
                </h3>
                <div class="about-me-info">
                    <p>Our chefs are masters of their craft, with years of experience and a deep passion for creating bold and flavorful dishes.</p>
                    <p>They work tirelessly to perfect our recipes and develop new ones that will delight our customers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacts -->
    <section id="contact-me-form">
        <h1>Leave a <span class="colored">review</span></h1>
        <h3>If you have any suggestions for us to improve, here's your chance!</h3>


        <form action="#" method="post" autocomplete="off">
            <div class="form-input">
                <label for="nameField">Name <span class="text-secondary">*</span></label>
                <input type="text" name="name" id="nameField" placeholder="John Doe" required>
            </div>
            <div class="form-input">
                <label for="emailField">E-mail <span class="text-secondary">*</span></label>
                <input type="email" name="email" id="emailField" placeholder="johndoe@company.com" required>
            </div>
            <div class="form-input">
                <label for="messageFeild">Message <span class="text-secondary">*</span></label>
                <textarea name="message" id="messageField" cols="30" rows="10" placeholder="Hi SavoryBites, pleased to review this experience..." required></textarea>
            </div>
            <button type="submit" name="sendMessageSubmit">
                <i class="fa-solid fa-paper-plane"></i> Send
            </button>
        </form>

        <div id="contacts-wrapper">
            <a href="tel:+351912345678">
                <div class="contact-card rounded">
                    <div class="icon"><i class="fa-solid fa-phone"></i>
                        <p>+351 912 345 678</p>
                    </div>
                </div>
            </a>
            <a href="mailto:savorybites@gmail.com">
                <div class="contact-card rounded">
                    <div class="icon"><i class="fa-solid fa-envelope"></i>
                        <p>savorybites@gmail.com</p>
                    </div>
                </div>
            </a>
            <a href="https://www.linkedin.com/in/hugovieira0512/" target="_blank">
                <div class="contact-card rounded">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i>
                        <p>Lorem Ipsum Street, Portugal</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer>Hugo Vieira, Gabriela Ribeiro &copy; 2023</footer>

    <!-- Scripts -->
    <script src="../../assets/scripts/popper.min.js"></script>
    <script src="../../assets/scripts/bootstrap.min.js"></script>
    <script src="../../assets/scripts/portfolio_main.js"></script>
    <script src="../../assets/scripts/portfolio_toggleLight.js"></script>

</body>

</html>