<!-- Main Content Section Starts -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <?php include('../admin/partials/menu.php') ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>

            <br><br>

            <!-- Button -->

            <a href="add-admin.php" class="btn-primary">Add Admin</a>

            <br><br><br>

            <table class="tbl-full">
                <tr>
                    <th>S.N</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1. </td>
                    <td>Matan Zada</td>
                    <td>MatanZada</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>

                <tr>
                    <td>2. </td>
                    <td>Yonatan hashiZada</td>
                    <td>YonatanhashiZada</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>

                <tr>
                    <td>3. </td>
                    <td>Nir Zadahashi</td>
                    <td>NirZadahashi</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>
            </table>

        </div>
    </div>
    <!-- Main Content Section Starts -->

    <?php include('./partials/footer.php') ?>
</body>

</html>