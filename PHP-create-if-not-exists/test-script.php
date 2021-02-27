<!DOCTYPE html>
<html lang="en">
<?php
$conn = mysqli_connect("localhost", "root", "root", '');
if (!$conn)
    die("Connection error" . mysqli_error($conn));
echo "<p style='color:white; background:green'>Connection ok</p>";
// Check if Database Exists
$db = mysqli_select_db($conn, "users");
if (empty($db)) {
    echo "<p style='color:white; background:red'>Database not found</p>";
} else {
    echo "<p style='color:white; background:green'>Database already exists</p>";
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
    <label for="toggle" class="show-btn">Show Modal</label>
    <div class="wrapper">
        <label for="toggle">
            <i class="cancel-icon fas fa-times"></i>
        </label>
        <div class="icon"><i class="fas fa-scroll"></i></div>
        <div class="content">
            <header>SQL Test Script</header>
            <p>This Script checks localhost for the existance of a database called "users"</p>
        </div>

    </div>
</body>

</html>