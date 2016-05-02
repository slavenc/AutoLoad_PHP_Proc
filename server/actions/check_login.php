<?php

session_start();

if (!isset($_SESSION['username'])) {
    $result = array('succes' => 'no');
} else {
    $result = array('succes' => 'yes', 'userMessage' => 'You are logged in as ' . $_SESSION['username'], 'userType' => $_SESSION['id_user_type']);
}

