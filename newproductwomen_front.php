<html>
<head>
    <link rel="stylesheet" href="newproduct.css">

</head>

<body class="BD">
    <?php
    include('admin_nav.php');
    ?>
    <form action="newproductwomen.php" method="POST" enctype="multipart/form-data">
        <table class="center">
            <div class="h1">
                <h1 style="text-align: center;">ADD WOMEN PRODUCT PAGE</h1>
            </div>
            <div class="whole">
                <tr>
                    <td>
                        <label> Product Name </label>
                        <input type="text" id="wPname" name="wpname" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Product Type </label>
                        <input type="text" id="wptype" name="wptype" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Product Price </label>
                        <input type="number" id="Price" name="Price" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Product Image </label>
                        <input type="file"  name="wP_img" required>
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