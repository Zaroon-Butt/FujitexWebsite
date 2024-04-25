
<html>
<head>
    <link rel="stylesheet" href="newproduct.css">

</head>

<body>
<?php
    include('admin_nav.php');
    ?>
    <form action="deletekidproduct.php" method="POST" enctype="multipart/form-data">
        <table class="center">
            <div class="h1">
                <h1 style="text-align: center;">ADD PRODUCT PAGE</h1>
            </div>
            <div class="whole">
                <tr>
                    <td>
                        <label> Enter Kid Product Id </label>
                        <input type="text" id="KP_id" name="KP_id" required>
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