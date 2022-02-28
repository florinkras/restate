<?php

class Login extends Db
{

  protected function getuser($username, $password)
  {
    $sql = 'SELECT * from users WHERE username = ?;';
    $stmt = $this->connect()->prepare($sql);


    if (!$stmt->execute(array($username))) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("location: ../index.php?error=usernotfound");
      exit();
    }

    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $checkpassword = password_verify($password, $user[0]['password']);

    if ($checkpassword == false) {
      $stmt = null;
      header("location: ../index.php?error=wrongpassword");
      exit();
    } else if ($checkpassword == true) {
      session_start();

      $_SESSION["id"] = $user[0]["id"];
      $_SESSION["username"] = $user[0]["username"];
      $_SESSION["role"] = $user[0]["role"];
    }

    $stmt = null;
  }
}
