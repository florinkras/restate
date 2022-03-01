<?php
class Service extends Db
{

  public function getAllServices()
  {
    $sql = 'SELECT * from services';
    $stmt = $this->connect();

    $results = $stmt->query($sql);
    $services = $results->fetchAll();

    return $services;
  }
}
