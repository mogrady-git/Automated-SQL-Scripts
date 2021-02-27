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
    else echo "<p style='color:white; background:green; font-weight:bold'>Database was created successfully!</p>";
} else {
    echo "<p style='color:white; background:green; font-weight:bold'>Database already exists...!</p>";
    // Creates table user_info if not exist
    $table = "SELECT * FROM user_info";
    $checktable = mysqli_query($conn, $table);
    if (!$checktable) {
        echo "<p style='color:white; background:red'>The Table was not found, please create the Table...!</p>";
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
    <title>PHP SQL Scripts | Demo App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>

<body>
    <input type="checkbox" id="toggle">
    <label for="toggle" class="show-btn">Open Modal</label>
    <div class="wrapper" style="margin-top: 10vh">
        <label for="toggle">
            <i class="cancel-icon fas fa-times"></i>
        </label>
        <div class="icon"><i class="fas fa-scroll"></i></div>
        <div class="content">
            <header>SQL Script</header>
            <h3>Run Information</h3>
            <hr>
            <p>1. On page load, the PHP function connected to mysql on the localhost with a username and password of "root", "root", checked the connection and searched for the database called users.
                <hr>
                2. The database was not found, so the database was then automatically created.
                <hr>
                3. Reload the page and the PHP script will run again, check the connection, check for the database and check if a table called user_info exists.
                <hr>
                4. Reload the page again and the PHP script will run again, check the connection, check for the database, and create the user_info table with the following construct below:
                <hr>
                a. Database Called: "users"<br>
                b. Table Called: "user_info"<br>
                c. Columns:<br>
                id int(100) NOT NULL AUTO_INCREMENT,<br>
                name varchar(255) NOT NULL,<br>
                email varchar(255) NOT NULL,<br>
                password varchar(255) NOT NULL,<br>
                PRIMARY KEY(id)<br>
            </p>
        </div>

    </div>
</body>

</html>