
<?php

$email = $_POST['email'];
$password = $_POST['_Password'];

include('db_connection.php');

$sql = "SELECT * FROM _admin WHERE email='$email' AND _Password='$password'";
$result = $db_connection->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['email'] = $email;
    header('location:admin_nav.php');
} else {
    echo "Incorrect email or password.";
    

}

$db_connection->close();

?>
<html>
<button onclick="window.location.href='login.html'">Back</button>
</html>