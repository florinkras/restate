<?php
session_start();

if (!$_SESSION || !$_SESSION['id'] || !$_SESSION['role']) {
    header("location: ../index.php?error=notAuthorized");
    return exit();
}

if (isset($_POST)) {
    $id = $_POST["propId"];
    $title = $_POST["title"];
    $location = $_POST["location"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $bathroomsCount = $_POST["bathroomsCount"];
    $bedroomsCount = $_POST["bedroomsCount"];
    $image = "";

    if ($_FILES['image']['tmp_name']) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    } else {
        $image = base64_encode($_POST['oldImage']);
    }

    include "../classes/db.classes.php";
    include "../classes/property.classes.php";
    include "../classes/property-controller.classes.php";

    $propertyController = new PropertyController($title, $location, $description, $price, $bathroomsCount, $bedroomsCount, $image, $_SESSION['id']);

    if (isset($_POST["createProperty"])) {
        $propertyController->createProperty();
    }

    if (isset($_POST["updateProperty"])) {
        $propertyController->updateProperty($id);
    }

    if (isset($_POST["deleteProperty"])) {
        $propertyController->deleteProperty($id);
    }

    header("location: ../index.php?error=none");
}
