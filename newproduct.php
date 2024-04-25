<?php
$P_name= $_POST['pname'];
$P_type= $_POST['ptype'];
$file_path = $_FILES['P_img']['name'];
$P_price = $_POST['price'];
move_uploaded_file($_FILES['P_img']['tmp_name'],$file_path);
include('db_connection.php');
$save = "INSERT INTO men (pname, ptype,P_img,price)
 VALUES ('$P_name', '$P_type','$file_path',$P_price)";
$result = mysqli_query($db_connection, $save);
if($result){
header('location:admin_nav.php');
}
else{
ECHO "ERROR ___".mysqli_error($db_connection);
}

?>