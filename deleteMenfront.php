<html>

<head>
    <link rel="stylesheet" href="newproduct.css">

</head>

<body>
<?php
    include('admin_nav.php');
    ?>
    <form action="deleteMenProduct.php" method="POST" enctype="multipart/form-data">
        <table class="center">
            <div class="h1">
                <h1 style="text-align: center;">DELETE MEN PRODUCT PAGE</h1>
            </div>
            <div class="whole">
                <tr>
                    <td>
                        <label> Enter Product Id </label>
                        <input type="text" id="P_id" name="P_id" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" style="align-content: center;">
                    </td>
                </tr>

            </div>

        </table>
    </form>
</body>


</html>