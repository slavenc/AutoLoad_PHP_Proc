<?php

session_start();

if (isset($_GET['method'])) {
    $sql = "SELECT * FROM user WHERE id = {$_SESSION['id']}";

    $res = $conn->query($sql);

    $row = $res->fetch_assoc();

    $result = array(
        'username' => $row['username'],
        'password' => $row['password'],
        'name' => $row['name'],
        'surname' => $row['surname'],
        'email' => $row['email']);
} else if (isset($_POST['method'])) {
    $sql = "UPDATE user
            SET name = '{$_POST['name']}', surname = '{$_POST['surname']}', email = '{$_POST['email']}', password = '{$_POST['password']}', username = '{$_POST['username']}' 
            WHERE id = {$_SESSION['id']}";
    $conn->query($sql);
    $_SESSION['username'] = $_POST['username'];
    $result = array('username' => $_POST['username']);
}

