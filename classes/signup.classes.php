<?php

class Singup extends Db
{

  protected function setUser($firstName, $lastName, $email, $username, $password, $role)
  {
    $sql = 'INSERT INTO users (firstName, lastName, email, username, password, role) VALUES (?, ?, ?, ?, ?, ?);';
    $stmt = $this->connect()->prepare($sql);

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    if (!$stmt->execute(array($firstName, $lastName, $email, $username, $hashedPwd, $role))) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
    }

    $stmt = null;
  }


  protected function checkUser($username, $email)
  {
    $sql = 'SELECT id from users WHERE username = ? OR email = ?;';
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute(array($username, $email))) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
    }

    $resultCheck = false;

    if ($stmt->rowCount() > 0) {
      $resultCheck = false;
    } else {
      $resultCheck = true;
    }

    return $resultCheck;
  }
}
