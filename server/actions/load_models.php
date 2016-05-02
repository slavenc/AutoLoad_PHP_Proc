<?php

$idBrand = $_GET['idBrand'];

$sql = "SELECT * FROM car_model WHERE id_brand = {$idBrand}";

$res = $conn->query($sql);

$result = [];

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $result[] = array('modelName' => $row['name'], 'idModel' => $row['id']);
    }
}

$conn->close();
