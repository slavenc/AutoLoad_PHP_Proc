<?php

session_start();

$email    = $_POST['email'];
$name     = $_POST['name'];
$surname  = $_POST['surname'];
$password = $_POST['password'];
$username = $_POST['username'];

$sql = "SELECT * FROM user WHERE username = '$username' ";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    $result = array('succes' => 'no', 'error' => 'User alredy exisit');
} else {

    $sql = "INSERT INTO user (username, password, name,  surname, email , id_user_type )
    VALUES ('$username', '$password', '$name', '$surname', '$email' , 2 )";

    if ($conn->query($sql) === TRUE) {
        $result               = array('succes' => 'yes');
        $_SESSION['username'] = $username;
        $id                   = $conn->insert_id;
        $_SESSION['id']       = $id;
    } else {
        $result = array('succes' => 'no', 'error' => 'Cant register');
    }
}

$conn->close();


