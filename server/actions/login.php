<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$res = $conn->query($sql);

if ($res->num_rows == 1) {
    $row                  = $res->fetch_assoc();
    $result               = array('succes' => 'yes', 'userType' => $row['id_user_type']);
    $_SESSION['username'] = $row['username'];
    $_SESSION['id']       = $row['id'];
    $_SESSION['id_user_type'] = $row['id_user_type'];
    
    
    $sql = "UPDATE user SET online = 1 WHERE username = '{$_SESSION['username']}' ";
    $conn->query($sql);
    
    $conn->close();
} else {
    $result = array('succes' => 'no', 'error' => 'Invalid user');
}

