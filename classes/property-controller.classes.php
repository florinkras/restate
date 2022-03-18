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
    private $created_by;


    public function __construct($title, $location, $description, $price, $bathroomsCount, $bedroomsCount, $image, $created_by)
    {
        $this->title = $title;
        $this->location = $location;
        $this->description = $description;
        $this->price = $price;
        $this->bathroomsCount = $bathroomsCount;
        $this->bedroomsCount = $bedroomsCount;
        $this->image = $image;
        $this->created_by = $created_by;
    }

    public function createProperty()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyInput");
            exit();
        }

        $this->createPropertyHandler($this->title, $this->location, $this->description, $this->price,  $this->bathroomsCount, $this->bedroomsCount, $this->image, $this->created_by);
    }

    public function updateProperty($id)
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyInput");
            exit();
        }

        $this->updatePropertyHandler($this->title, $this->location, $this->description, $this->price,  $this->bathroomsCount, $this->bedroomsCount, $this->created_by, $id);
    }

    public function deleteProperty($id)
    {
        $this->deletePropertyHandler($id);
    }

    private function emptyInput()
    {
        $result = false;

        if (empty($this->title) || empty($this->location) || empty($this->description) || empty($this->price) ||  empty($this->bathroomsCount) || empty($this->bedroomsCount) || empty($this->image) || empty($this->created_by)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}
