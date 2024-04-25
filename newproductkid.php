<?php
$KP_name= $_POST['kpname'];
$KP_type= $_POST['kptype'];
$file_path = $_FILES['kP_img']['name'];
$P_price = $_POST['price'];
move_uploaded_file($_FILES['kP_img']['tmp_name'],$file_path);

include('db_connection.php');
$save = "INSERT INTO kid (kp_name, kp_type,kP_img,price)
 VALUES ('$KP_name', '$KP_type','$file_path',$P_price)";
$result = mysqli_query($db_connection, $save);
if($result){
header('location:admin_nav.php');
}
else{
ECHO "ERROR ___".mysqli_error($db_connection);
}

?>