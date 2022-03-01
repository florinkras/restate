<?php

class PropertyController extends Property
{
    private $title;
    private $location;
    private $description;
    private $price;
    private $bathroomsCount;
    private $bedroomsCount;
    private $image;


    public function __construct($title, $location, $description, $price, $bathroomsCount, $bedroomsCount, $image)
    {
        $this->title = $title;
        $this->location = $location;
        $this->description = $description;
        $this->price = $price;
        $this->bathroomsCount = $bathroomsCount;
        $this->bedroomsCount = $bedroomsCount;
        $this->image = $image;
    }

    public function createProperty()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyInput");
            exit();
        }

        $this->setProperty($this->title, $this->location, $this->description, $this->price,  $this->bathroomsCount, $this->bedroomsCount, $this->image);
    }

    private function emptyInput()
    {
        $result = false;

        if (empty($this->title) || empty($this->location) || empty($this->description) || empty($this->price) ||  empty($this->bathroomsCount) || empty($this->bedroomsCount) || empty($this->image)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}
