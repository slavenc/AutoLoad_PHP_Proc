<?php

$sql = "SELECT * FROM brands";

$res = $conn->query($sql);

$result = [];

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $result[] = array('brandName' => $row['name'], 'idBrand' => $row['id']);
    }
}

$conn->close();
