<?php

include('db_connection.php');
include('admin_nav.php');
$id = $_POST['P_id'];
$q = "DELETE FROM men WHERE P_id='$id'";
$q_status = mysqli_query($db_connection, $q);
If($q_status){ 
header('location:Adminhome.php');
} 


?>