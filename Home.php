<html>
<title>Fujitex Shop</title>
<head>
  <link rel="stylesheet" href="menfront.css">
</head>
<body>
<?php
    include('nav.html');
    ?>
    <div class="container">
        <?php

        include('db_connection.php');
        $qry = "SELECT * FROM men";
        $data = mysqli_query($db_connection, $qry);
        while ($men_data = mysqli_fetch_assoc($data)) {
            ?>
            <div class="Product">
                <div class="description">
                    <img src="<?php echo $men_data['P_img']; ?>" alt="Fabric img ">
                    <h3> Product name :
                        <?php echo $men_data['pname']; ?>
                    </h3>
                    <h4>Product type :
                        <?php echo $men_data['ptype']; ?>
                    </h4>
                    <h4> Product Price
                        <?php echo $men_data['price']; ?>
                    </h4>
                    

                </div>

            </div>

        <?php } ?>
    
    <?php
    $qry = "SELECT * FROM women";
    $data = mysqli_query($db_connection, $qry);
    while ($women_data = mysqli_fetch_assoc($data)) {
        ?>
        <div class="Product">
            <div class="description">
                <img src="<?php echo $women_data['WP_img']; ?>" alt=" Fabric img ">
                <h3> Product name :
                    <?php echo $women_data['WP_name']; ?>
                </h3>
                <h4> Product type :
                    <?php echo $women_data['WP_type']; ?>
                </h4>
                <h4> Product Price
                    <?php echo $women_data['price']; ?>
                </h4>

            </div>

        </div>

    <?php } ?>
    <?php
   
    $qry = "SELECT * FROM kid";
    $data = mysqli_query($db_connection, $qry);
    while ($kid_data = mysqli_fetch_assoc($data)) {
        ?>
        <div class="Product">
            <div class="description">
                <img src="<?php echo $kid_data['kp_img']; ?>" alt=" Fabric img ">
                <h3> Product name :
                    <?php echo $kid_data['kp_name']; ?>
                </h3>
                <h4> Product type :
                    <?php echo $kid_data['kp_type']; ?>
                </h4>
                <h4> Product Price
                    <?php echo $kid_data['price']; ?>
                </h4>

            </div>

        </div>

    <?php } ?>

</body>

</html>