<?php

include('db_connection.php');
$email_var = $_POST['email'];
$password_var = $_POST['_Password'];

echo $email_var;
echo $password_var;

$qry = "SELECT email FROM user WHERE email='$email_var'";
$data = mysqli_query($db_connection, $qry);
if(mysqli_num_rows($data) > 0) {
    $user_data = mysqli_fetch_assoc($data);
    if($user_data['email'] == $email_var) {
        $echo = "Email already exist";
        header("Location: newuser.html");
        exit;
    }
} else {
    header("Location: Home.php");
    exit;
}

?>