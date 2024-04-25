<?php
$WP_name = $_POST['wpname'];
$WP_type = $_POST['wptype'];
$file_path = $_FILES['wP_img']['name'];
$P_price = $_POST['Price'];
move_uploaded_file($_FILES['wP_img']['tmp_name'], $file_path);



include('db_connection.php');
$save = "INSERT INTO women (WP_name, WP_type,WP_img,price)
 VALUES ('$WP_name', '$WP_type','$file_path','$P_price')";
$result = mysqli_query($db_connection, $save);
if ($result) {
    header('location:admin_nav.php');
} else {
    echo "ERROR ___" . mysqli_error($db_connection);
}

?>