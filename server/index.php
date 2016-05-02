<?php

require './init/init.php';

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if ($_GET['action']) {
    $action = $_GET['action'];
}

header('Content-Type: application/json');

$result = [];

if ($action) {
    require './actions/' . $action;
} else {
    $result = array('NO SELECTED ACTION');
}

echo json_encode($result);


