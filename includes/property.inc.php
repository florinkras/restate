<?php
session_start();

if (!$_SESSION || !$_SESSION['id'] || !$_SESSION['role']) {
    header("location: ../index.php?error=notAuthorized");
    return exit();
}

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


    $login = new PropertyController($title, $location, $description, $price, $bathroomsCount, $bedroomsCount, $image, $_SESSION['id']);

    $login->createProperty();

    header("location: ../index.php?error=none");
}
