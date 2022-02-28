<?php

if (isset($_POST)) {

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  include "../classes/db.classes.php";
  include "../classes/signup.classes.php";
  include "../classes/signup-controller.classes.php";


  if (isset($_POST['signup'])) {
    $signup = new SignupController($firstName, $lastName, $email, $username, $password, 0);
  } else if (isset($_POST['createAdmin'])) {
    $signup = new SignupController($firstName, $lastName, $email, $username, $password, 1);
  }

  $signup->signupUser();

  header("location: ../index.php?error=none");
}
