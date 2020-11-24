<?php 
include 'conn.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$date = $_POST['date'];


/** PDO **/

$req = $conn->prepare("Insert INTO admin (id, email, username, password, date VALUES (null, '.$email.', '.$username.', '.$password.', '.$date.')");
$req->execute();

    $userinfo=array();

    while($fetchUser=$req->fetch() ){
        $userinfo[]=$fetchUser;
    }
    echo json_encode($userinfo);
} 