<?php

$idCar = $_GET['idCar'];

$sql = "SELECT c.id, c.description, c.year, c.price, cm.name AS carModel, b.name AS brandName, u.name, u.surname, u.email "
        . "FROM car AS c "
        . "INNER JOIN car_model AS cm ON c.id_model = cm.id "
        . "INNER JOIN brands AS b ON b.id = cm.id_brand "
        . "INNER JOIN user AS u ON c.id_user = u.id "
        . "WHERE c.id = $idCar ";

$res = $conn->query($sql);

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $result = array(
            'user' => $row['name'],
            'surname' => $row['surname'],
            'email' => $row['surname'],
            'id' => $row['id'],
            'description' => $row['description'],
            'year' => $row['year'],
            'carModel' => $row['carModel'],
            'price' => $row['price'],
            'brandName' => $row['brandName']
        );
    }
}

$conn->close();
