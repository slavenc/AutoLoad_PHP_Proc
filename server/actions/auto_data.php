<?php

if($_POST['newBrand']){
    
    $sql = "INSERT INTO brands (name)  VALUES ('{$_POST['newBrand']}') ";
    $conn->query($sql);
    
    $sql = "SELECT * FROM brands";

    $res = $conn->query($sql);

    $result = [];

    if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $result[] = array('brandName' => $row['name'], 'idBrand' => $row['id']);
    }
}

$conn->close();
}

if($_POST['newModel']){
    
    $sql = "INSERT INTO car_model (name , id_brand)  VALUES ('{$_POST['newModel']}' , {$_POST['idBrand']} ) ";
    $conn->query($sql);
    
}

     
