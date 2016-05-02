<?php

session_start();

$idBrand   = $_POST["idBrand"];
$idModel   = $_POST["idModel"];
$year    = $_POST["year"];
$price   = $_POST["price"];
$description = $_POST["description"];
$id_user = $_SESSION["id"];

$sql = "INSERT INTO car (id_user, id_brand, id_model, year,  price , description )
VALUES ('$id_user', '$idBrand', '$idModel', '$year', '$price' , '$description' )";
$res = $conn->query($sql);
if ($res === TRUE) {
    $result = array('succes' => 'yes', 'message' => 'succesifully added');
} else {
    $result = array('succes' => 'no', 'error' => 'Cant add car');
}

$conn->close();

