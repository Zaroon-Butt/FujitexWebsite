<html>

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
                    <h3> Product Name
                        <?php echo $men_data['pname']; ?>
                    </h3>
                    <h4> Product Type
                        <?php echo $men_data['ptype']; ?>
                    </h4>
                    <h4> Product Price
                        <?php echo $men_data['price']; ?>
                    </h4>
                </div>
                <button class="add-to-cart" data-id="<?php echo $men_data['P_id']; ?>"
                    data-name="<?php echo $men_data['pname']; ?>" data-price="<?php echo $men_data['price']; ?>"
                    data-pic="<?php echo $men_data['P_img']; ?>">Add to Cart
                </button>
            </div>

        <?php } ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var cart = [];
        $(document).ready(function () {
            $(".add-to-cart").click(function () {
                var productId = $(this).data('id');
                var productName = $(this).data('name');
                var productPrice = $(this).data('price');
                var productPic = $(this).data('pic');
                var product = {
                    id: productId,
                    name: productName,
                    price: productPrice,
                    pic: productPic
                };
                cart.push(product);
                $.ajax({
                    url: 'CartBackend.php',
                    method: 'post',
                    data: {
                        'cart': cart
                    },
                    success: function (response) {

                        window.alert(["Product is Added to the Cart"]);
                    }
                });
            });
        });
    </script>
</body>

</html>