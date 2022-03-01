<?php

class ContactSeller extends Db

{
  public function setContact($propertyId, $firstName, $lastName, $email, $country, $message, $created_by)
  {
    $sql = 'INSERT INTO contact (propertyId, firstName, lastName, email, country, message, created_by) VALUES (?, ?, ?, ?, ?, ?, ?);';
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute(array($propertyId, $firstName, $lastName, $email, $country, $message, $created_by))) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
    }

    $stmt = null;
  }
}
