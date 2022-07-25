<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //start session
    session_start();

    //create constants to store non repeating values
    define('SITEURL', 'http://localhost/food-order-project/web-design-course-restaurant-master/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD); //database connection;
    $db_select = mysqli_select_db($conn, DB_NAME); //select database;

    ?>
</body>

</html>