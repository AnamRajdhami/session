<?php
// session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db_email = 'anam@gmail.com';
    $db_pass = 'anam123';

if($db_email===$email && $db_pass===$password){
// $_SESSION['auth'] = 'true';
setcookie("email", $email, time() + 5, "/");

header('location: ./dashboard.php');

}
else{
    header('location: ./index.php');
}
}

?>