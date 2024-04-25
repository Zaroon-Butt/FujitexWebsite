<html>
<head>
    <link rel="stylesheet" href="newproduct.css">

</head>

<body class="BD">
    <?php
    include('admin_nav.php');
    ?>

    <form action="newproduct.php" method="POST" enctype="multipart/form-data">
        <table class="center">
            <div class="h1">
                <h1 style="text-align: center;">ADD MEN PRODUCT PAGE</h1>
            </div>
            <div class="whole">
                <tr>
                    <td>
                        <label> Product Name </label>
                        <input type="text" id="Pname" name="pname" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Product Type </label>
                        <input type="text" id="ptype" name="ptype" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Product Price </label>
                        <input type="text" id="price" name="price" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Product Image </label>
                        <input type="file"  name="P_img" required>
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