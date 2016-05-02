<?php

session_start();



 
    $sql = "UPDATE user SET online = 0 WHERE username = '{$_SESSION['username']}' ";
    
    $conn->query($sql);
 
    
    $result = array('succes' => 'yes');
    session_destroy();


