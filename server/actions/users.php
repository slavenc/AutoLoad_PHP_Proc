<?php

if(isset($_GET['getUsers'])){
    $sql = 'SELECT u.id, ut.name AS user_type, u.username, u.password, u.online, '
            . 'u.name, u.surname, u.email FROM user AS u '
            . 'INNER JOIN user_type AS ut ON u.id_user_type = ut.id ';
    
    $res = $conn->query($sql);
    
    
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $result[] = array('uId' => $row['id'], 
                          'userType' => $row['user_type'], 
                          'username' => $row['username'], 
                          'password' => $row['password'], 
                          'name' => $row['name'], 
                          'surname' => $row['surname'],
                          'online' => $row['online']);
    }
}
   
}

if(isset($_POST['deleteUser'])){
    $sql = "DELETE FROM user WHERE id={$_POST['idUser']}";
   $conn->query($sql);
   $result = array('succes'=>'yes');
}



