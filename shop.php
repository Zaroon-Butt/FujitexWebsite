<?php

$email_var = $_POST['email'];
$password_var = $_POST['_Password'];

include('db_connection.php');
if ($db_connection) 
{
    header('location:Home.php');
} else 
{
    echo "not connected fuck off ";
}

$sql = "INSERT INTO user( email, _Password ) VALUES ('$email_var','$password_var')";
$result = mysqli_query($db_connection, $sql);
if ($result) 
{
    echo "data saved";
}
?>