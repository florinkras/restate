<?php

if (isset($_POST["submit"])) {

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  include "../classes/db.classes.php";
  include "../classes/signup.classes.php";
  include "../classes/signup-controller.classes.php";


  $signup = new SignupController($firstName, $lastName, $email, $username, $password);

  $signup->signupUser();

  header("location: ../index.php?error=none");
}
