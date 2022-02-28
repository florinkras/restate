<?php
session_start();
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
  <div class="navigation py-1">
    <div class="container flex align-center">
      <h2><i class="fas fa-home"></i> restate</h2>
      <nav>
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="properties.php">Properties</a></li>
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
  <section class="showcase py-1 bg-filter">
    <div class="container flex full-height align-center">
      <div class="showcase-text filter-container card">
        <h3 class="text-primary">Search for what you need</h3>
        <form class="my-1">
          <input class="bg-light my-1" type="text" placeholder="search" />
          <select class="bg-light" name="filter" id="filter">
            <option class="options" value="" disabled selected>
              Select your option
            </option>
            <option class="options" value="buy">On Sale</option>
            <option class="options" value="rent">On rent</option>
          </select>
        </form>
        <button class="btn btn-primary">
          <i class="fas fa-search"></i> Search
        </button>
      </div>
    </div>
  </section>

  <!--Cards-->
  <section class="properties py-1">
    <div class="container">
      <div class="card-text text-center py-1">
        <p class="lead text-primary">Properties</p>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          <br />Quas, necessitatibus?
        </p>
      </div>
      <div class="grid grid-3">
        <a class="card" href="property.php">
          <img src="images/properties/house-1.jpg" alt="" />
          <p class="text-right">$100.000</p>
          <div class="flex justify-space-between align-items-center">
            <div class="card-title">
              <h4>The Palace</h4>
              <h6>London, UK</h6>
            </div>
            <div class="card-icons flex">
              <p><i class="fas fa-bed"></i> 5</p>
              <p><i class="fas fa-sink"></i> 2</p>
            </div>
          </div>
        </a>
        <a href="property.php" class="card">
          <img src="images/properties/house-2.jpg" alt="" />
          <p class="text-right">$100.000</p>
          <div class="flex justify-space-between align-items-center">
            <div class="card-title">
              <h4>The Palace</h4>
              <h6>Toronto, CA</h6>
            </div>
            <div class="card-icons flex">
              <p><i class="fas fa-bed"></i> 5</p>
              <p><i class="fas fa-sink"></i> 2</p>
            </div>
          </div>
        </a>
        <a href="property.php" class="card">
          <img src="images/properties/house-3.jpg" alt="" />
          <p class="text-right">$100.000</p>
          <div class="flex justify-space-between align-items-center">
            <div class="card-title">
              <h4>The Palace</h4>
              <h6>London, UK</h6>
            </div>
            <div class="card-icons flex">
              <p><i class="fas fa-bed"></i> 5</p>
              <p><i class="fas fa-sink"></i> 2</p>
            </div>
          </div>
        </a>
        <a href="property.php" class="card">
          <img src="images/properties/house-4.jpg" alt="" />
          <p class="text-right">$100.000</p>
          <div class="flex justify-space-between align-items-center">
            <div class="card-title">
              <h4>The Palace</h4>
              <h6>New York, US</h6>
            </div>
            <div class="card-icons flex">
              <p><i class="fas fa-bed"></i> 5</p>
              <p><i class="fas fa-sink"></i> 2</p>
            </div>
          </div>
        </a>
        <a href="property.php" class="card">
          <img src="images/properties/house-5.jpg" alt="" />
          <p class="text-right">$100.000</p>
          <div class="flex justify-space-between align-items-center">
            <div class="card-title">
              <h4>The Palace</h4>
              <h6>London, UK</h6>
            </div>
            <div class="card-icons flex">
              <p><i class="fas fa-bed"></i> 5</p>
              <p><i class="fas fa-sink"></i> 2</p>
            </div>
          </div>
        </a>
        <a href="property.php" class="card">
          <img src="images/properties/house-6.jpg" alt="" />
          <p class="text-right">$100.000</p>
          <div class="flex justify-space-between align-items-center">
            <div class="card-title">
              <h4>The Palace</h4>
              <h6>London, UK</h6>
            </div>
            <div class="card-icons flex">
              <p><i class="fas fa-bed"></i> 5</p>
              <p><i class="fas fa-sink"></i> 2</p>
            </div>
          </div>
        </a>
      </div>
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
          <li><a href="/indexphp">Home</a></li>
          <li><a href="/servicesphp">Services</a></li>
          <li><a href="/propertiesphp">Properties</a></li>
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