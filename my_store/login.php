<?php

include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];


/** PDO **/

$req = $conn->prepare("SELECT * FROM admin WHERE username ='".$username."' and password='".$password."'");
$req->execute();
$userexist = $req->rowCount();

if($userexist == 1)
{

    $userinfo=array();

    while($fetchUser=$req->fetch() ){
        $userinfo[]=$fetchUser;
    }
    echo json_encode($userinfo);
} else {
    print( "****** Erreur *******");
}