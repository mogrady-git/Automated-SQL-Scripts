<!DOCTYPE html>
<html lang="en">
<?php
$conn = mysqli_connect("localhost", "root", "root", '');
if (!$conn)
    die("Connection error" . mysqli_error($conn));
echo "<p style='color:white; background:green'>Connection successful...</p>";
// Check if users Database Exists
$db = mysqli_select_db($conn, "users");
if (empty($db)) {
    echo "<p style='color:white; background:red'>Database was not found!</p>";

    // Create users Database
    $dbcr = "create database users";
    $check = mysqli_query($conn, $dbcr);
    if (!$check)
        echo "Database Create Error";
    else echo "<p style='color:green; background:yellow; font-weight:bold'>Database was created successfully!</p>";
} else {
    echo "<p style='color:white; background:green; font-weight:bold'>Database already exists...!</p>";
    // Creates table user_info if not exist
    $table = "SELECT * FROM user_info";
    $checktable = mysqli_query($conn, $table);
    if (!$checktable) {
        echo "<p style='color:white; background:red; font-weight:bold'>The Table was not found, please create the Table...!</p>";
        // Creating the Table
        $createTBL = "CREATE TABLE user_info (
            id int(100) NOT NULL AUTO_INCREMENT,
            name varchar(255) NOT NULL,
            email varchar(255) NOT NULL,
            password varchar(255) NOT NULL,
            PRIMARY KEY(id)
            )";
        $ok = mysqli_query($conn, $createTBL);
    } else {
        echo "<p style='color:white; background:green; font-weight:bold'>Table already exists...!</p>";
    }
};

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription App | Full Stack PHP Subscriber Application</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>

<body>
    <input type="checkbox" id="toggle">
    <label for="toggle" class="show-btn">Create Database and Table if not exist with PHP</label>
    <div class="wrapper">
        <label for="toggle" class="cancel-btn"><i class="fas fa-times"></i></label>
        <div class="icon"><i class="far fa-envelope"></i></div>
        <div class="content">
            <header>SQL Script</header>
            <p>This Script will Create the following:
            </p>
            <br>
            <button>Click Here</button>
        </div>

    </div>
</body>

</html>