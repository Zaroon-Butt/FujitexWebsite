<?php

include('db_connection.php');
include('admin_nav.php');
$id = $_POST['KP_id'];
$q = "DELETE FROM kid WHERE KP_id='$id'";
$q_status = mysqli_query($db_connection, $q);
If($q_status){ 
header('location:Adminhome.php');
} 


?>