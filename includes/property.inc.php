<?php

if (isset($_POST["createProperty"])) {
    $title = $_POST["title"];
    $location = $_POST["location"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $bathroomsCount = $_POST["bathroomsCount"];
    $bedroomsCount = $_POST["bedroomsCount"];
    $image = file_get_contents($_FILES['image']['tmp_name']);

    include "../classes/db.classes.php";
    include "../classes/property.classes.php";
    include "../classes/property-controller.classes.php";


    $login = new PropertyController($title, $location, $description, $price, $bathroomsCount, $bedroomsCount, $image);

    $login->createProperty();

    header("location: ../index.php?error=none");
}
