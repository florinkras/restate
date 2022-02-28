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
}
