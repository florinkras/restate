<?php

class SignupController extends Singup
{
  private $firstName;
  private $lastName;
  private $email;
  private $username;
  private $password;
  private $role;


  public function __construct($firstName, $lastName, $email, $username, $password, $role)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->username = $username;
    $this->password = $password;
    $this->role = $role;
  }

  public function signupUser()
  {
    if ($this->emptyInput() == false) {
      header("location: ../index.php?error=emptyInput");
      exit();
    }
    if ($this->invalidEmail() == false) {
      header("location: ../index.php?error=invalidEmail");
      exit();
    }
    if ($this->usernameTakenCheck() == false) {
      header("location: ../index.php?error=usernameoremailtaken");
      exit();
    }

    $this->setUser($this->firstName, $this->lastName, $this->email, $this->username,  $this->password, $this->role);
  }

  private function emptyInput()
  {
    $result = false;

    if (empty($this->firstName) || empty($this->lastName) || empty($this->email) || empty($this->username) ||  empty($this->password)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function invalidEmail()
  {
    $result = false;

    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }

  private function usernameTakenCheck()
  {
    $result = false;

    if (!$this->checkUser($this->username, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }
}
