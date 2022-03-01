<?php

class ContactSellerController extends ContactSeller
{
  private $propertyId;
  private $firstName;
  private $lastName;
  private $email;
  private $country;
  private $message;
  private $created_by;


  public function __construct($propertyId, $firstName, $lastName, $email, $country, $message, $created_by)
  {
    $this->propertyId = $propertyId;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->country = $country;
    $this->message = $message;
    $this->created_by = $created_by;
  }

  public function createContact()
  {
    if ($this->emptyInput() == false) {
      header("location: ../index.php?error=emptyInput");
      exit();
    }

    $this->setContact($this->propertyId, $this->firstName, $this->lastName, $this->email, $this->country, $this->message, $this->created_by);
  }

  private function emptyInput()
  {
    $result = false;

    if (empty($this->propertyId) || empty($this->firstName) || empty($this->lastName) || empty($this->email) ||  empty($this->country) || empty($this->message) ||  empty($this->created_by)) {
      $result = false;
    } else {
      $result = true;
    }

    return $result;
  }
}
