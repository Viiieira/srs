<nav class="navbar navbar-expand-lg fixed-top">
    <div class="progress-container">
        <div class="progress-bar fixed-top" id="myBar"></div>
    </div>
    <div class="container-fluid">
        <a class="navbar-brand" href="">Savory Bites</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="#hero" aria-current="page" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about-me" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="#contact-me-form" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                        <?php if(isset($_SESSION['user'])) { ?>
                        <a href="?logout=1" class="nav-link">Logout</a>
                        <?php } else { ?>
                        <a href="../login/" class="nav-link">Login</a>
                        <?php } ?>
                    </li>
                <li class="nav-item">
                    <i class="nav-link fa-solid" id="toggleLight"></i>
                </li>
            </ul>
        </div>
    </div>
</nav>