<?php

$idBrand = $_GET['idBrand'];
$idModel = $_GET['idModel'];

$sql = "SELECT c.id, c.description, c.year, c.price, cm.name AS carModel, b.name AS brandName "
        . "FROM car AS c "
        . "INNER JOIN car_model AS cm ON c.id_model = cm.id "
        . "INNER JOIN brands AS b ON b.id = cm.id_brand "
        . "WHERE b.id = {$idBrand} AND cm.id = {$idModel}";

$res = $conn->query($sql);

$result = [];

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $result[] = array('id' => $row['id'], 'description' => $row['description'], 'year' => $row['year'], 'carModel' => $row['carModel'], 'price' => $row['price'], 'brandName' => $row['brandName']);
    }
}

$conn->close();
