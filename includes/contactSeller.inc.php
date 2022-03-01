<?php
session_start();

if (!$_SESSION || !$_SESSION['id'] || !$_SESSION['role']) {
  header("location: ../index.php?error=notAuthorized");
  return exit();
}

if (isset($_POST["contactSeller"])) {

  $propertyId = $_POST["propertyId"];
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $country = $_POST["country"];
  $message = $_POST["message"];

  echo $propertyId;
  echo $firstName;
  echo $lastName;
  echo $email;
  echo $country;
  echo $message;

  include "../classes/db.classes.php";
  include "../classes/contactSeller.classes.php";
  include "../classes/contactSeller-controller.classes.php";


  $login = new ContactSellerController($propertyId, $firstName, $lastName, $email, $country, $message, $_SESSION['id']);

  $login->createContact();

  header("location: ../index.php?message=thankyou");
}
