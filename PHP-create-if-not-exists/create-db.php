<!DOCTYPE html>
<html lang="en">

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
            <header>PHP Create SQL Script</header>
            <p>The following PHP script will create the following:<br>
                a. Database Called: "users"<br>
                b. Table Called: "user_info"<br>
                c. Columns:<br>
                id int(100) NOT NULL AUTO_INCREMENT,<br>
                name varchar(255) NOT NULL,<br>
                email varchar(255) NOT NULL,<br>
                password varchar(255) NOT NULL,<br>
                PRIMARY KEY(id)<br>
                <hr>
                On localhost with username and password of "root"
            </p>
            <br>
            <a href="run-script.php"><button>Click Here to Run this Script</button></a>
        </div>

    </div>
</body>

</html>