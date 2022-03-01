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
    <link rel="stylesheet" href="./css/form.css" />
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

    <div class="container flex flex-column align-center my-2 form-container">
        <h1>Dashboard</h1>
    </div>

    <div class="container flex flex-column align-center card my-2 form-container">
        <div class="flex justify-center align-center bg-primary p-2 lock-icon">
            <i class="fas fa-lock"></i>
        </div>
        <h2>Create Admin</h2>
        <form name="createAdmin" action="includes/signup.inc.php" method="post" id="createAdmin" class="flex flex-column align-center login-form">
            <input id="firstName" name="firstName" class="bg-light" type="text" placeholder="first name*" />
            <input id="lastName" name="lastName" class="my-1 bg-light" type="text" placeholder="last name*" />
            <input id="email" name="email" class="my-1 bg-light" type="email" placeholder="email*" />
            <input id="username" name="username" class="my-1 bg-light" type="text" placeholder="username*" />
            <input id="password" name="password" class="my-1 bg-light" type="password" placeholder="password*" />
            <button class="btn" type="submit" name="createAdmin">Sign up</button>
        </form>
    </div>

    <div class="container flex flex-column align-center card my-2 form-container">
        <div class="flex justify-center align-center bg-primary p-2 lock-icon">
            <i class="fas fa-lock"></i>
        </div>
        <h2>Create Property</h2>
        <form name="createProperty" action="includes/property.inc.php" method="post" id="property" enctype="multipart/form-data" class="flex flex-column align-center login-form">
            <input id="title" name="title" class="bg-light" type="text" placeholder="title*" />
            <input id="location" name="location" class="my-1 bg-light" type="text" placeholder="location*" />
            <textarea id="description" name="description" class="my-1 bg-light" type="text" placeholder="description*"></textarea>
            <input id="price" name="price" class="my-1 bg-light" type="number" placeholder="price*" />
            <input id="bedroomsCount" name="bedroomsCount" class="my-1 bg-light" type="number" placeholder="bedrooms count*" />
            <input id="bathroomsCount" name="bathroomsCount" class="my-1 bg-light" type="number" placeholder="bathrooms count*" />
            <input id="image" name="image" class="my-1 bg-light" type="file" accept="image/png, image/gif, image/jpeg" placeholder="image*" />
            <button class="btn" type="submit" name="createProperty">Create Property</button>
        </form>
    </div>

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