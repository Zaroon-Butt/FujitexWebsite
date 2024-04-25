
<?php

$email = $_POST['email'];
$password = $_POST['_Password'];

// Connect to the database
include('db_connection.php');

// Query to check if email and password exist
$sql = "SELECT * FROM user WHERE email='$email' AND _Password='$password'";
$result = $db_connection->query($sql);

// If email and password exist, then start a session
if ($result->num_rows > 0) {
    session_start();
    $_SESSION['email'] = $email;
    header('location:Home.php');
} else {
    echo "Incorrect email or password.";
    

}

$db_connection->close();

?>
<html>
<button onclick="window.location.href='login.html'">Back</button>
</html>