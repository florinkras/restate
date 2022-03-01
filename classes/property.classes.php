<?php

class Property extends Db

{
    public function setProperty($title, $location, $description, $price, $bathroomsCount, $bedroomsCount, $image, $created_by)
    {
        $sql = 'INSERT INTO property (title, location, description, price, bathroomsCount, bedroomsCount, image, created_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?);';
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($title, $location, $description, $price, $bathroomsCount, $bedroomsCount, $image, $created_by))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
        }

        $stmt = null;
    }

    public function getAllProperties()
    {
        $sql = 'SELECT * from property';
        $stmt = $this->connect();

        $property = $stmt->query($sql);
        $stmt = null;
        return $property;
    }

    public function getFeaturedProperties()
    {
        $sql = 'SELECT * from property';
        $stmt = $this->connect();

        $property = $stmt->query($sql);
        $stmt = null;
        return $property;
    }

    public function getProperty($id)
    {
        $sql = 'SELECT * from property WHERE ID = ' . $id;
        $stmt = $this->connect();

        $property = $stmt->query($sql);
        $result = $property->fetch();
        return $result;
    }
}
