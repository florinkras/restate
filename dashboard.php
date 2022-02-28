<?php
session_start();

if (!$_SESSION || !$_SESSION['id'] || !$_SESSION['role']) {
    header("location: ./index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/utilities.css" />
    <link rel="stylesheet" href="./css/media-queries.css" />
    <title>REstate</title>
</head>

<body>
    <!--Header Navigation-->
    <div class="navigation py-1">
        <div class="container flex align-center">
            <h2><i class="fas fa-home"></i> restate</h2>
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="properties.php">Properties</a></li>
                    <?php
                    if ($_SESSION && $_SESSION['id'] && $_SESSION['role']) {
                        echo '<li><a href="dashboard.php">Dashboard</a></li>';
                    }
                    ?>
                </ul>
            </nav>
            <?php
            if ($_SESSION && $_SESSION["id"]) {
                echo '<a href="includes/logout.inc.php" class="btn btn-primary">Log out</a>';
            } else {
                echo '<a href="login.php" class="btn btn-primary">Log in</a>';
            }
            ?>
            <div class="menu-btn">
                <i class="fas fa-bars fa-2x"></i>
            </div>
        </div>
    </div>

    <!--Mobile Navigation-->
    <div class="mobile-nav">
        <div class="container">
            <nav class="card">
                <ul class="menu">
                    <li><a href="indexphp">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="properties.php">Properties</a></li>
                    <?php
                    if ($_SESSION && $_SESSION['id'] && $_SESSION['role']) {
                        echo '<li><a href="dashboard.php">Dashboard</a></li>';
                    }
                    ?>
                    <?php
                    if ($_SESSION && $_SESSION["id"]) {
                        echo '<li><a href="includes/logout.inc.php" class="btn btn-primary">Log Out</a></li>';
                    } else {
                        echo '<li><a href="login.php" class="btn btn-primary">Log In</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>

    <!--Showcase-->
    <section class="py-1">
        <div class="container flex full-height align-center">
            <h1>dashboard</h1>
        </div>
    </section>


    <!--Footer-->
    <footer class="footer bg-primary">
        <div class="container py-4 flex justify-space-between">
            <div class="footer-logo">
                <h2 class="md">restate</h2>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/services.php">Services</a></li>
                    <li><a href="/properties.php">Properties</a></li>
                </ul>
            </div>
            <div class="footer-locations">
                <h3>Locations</h3>
                <ul>
                    <li>
                        <p>Prishtina</p>
                    </li>
                    <li>
                        <p>Tirana</p>
                    </li>
                    <li>
                        <p>Skopje</p>
                    </li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact</h3>
                <ul>
                    <li>
                        <p>+38344777777</p>
                    </li>
                    <li>
                        <p>info@restate.com</p>
                    </li>
                    <div class="social-icons">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </ul>
            </div>
        </div>
        <div class="copyright text-center">
            <p>All rights reserved &copy; restate 2021</p>
        </div>
    </footer>

    <script type="module" src="./app.js"></script>
</body>

</html>