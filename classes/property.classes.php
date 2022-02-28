<?php

class Property extends Db
{

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
