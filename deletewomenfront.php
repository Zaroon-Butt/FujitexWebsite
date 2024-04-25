<html>
<head>
    <link rel="stylesheet" href="newproduct.css">

</head>

<body>
    <?php
    include('admin_nav.php');
    ?>
    <form action="deletewomenproduct.php" method="POST" enctype="multipart/form-data">
        <table class="center">
            <div class="h1">
                <h1 style="text-align: center;">DELETE WOMEN PRODUCT PAGE</h1>
            </div>
            <div class="whole">
                <tr>
                    <td>
                        <label> Enter Women Product Id </label>
                        <input type="text" id="WP_id" name="WP_id" required>
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