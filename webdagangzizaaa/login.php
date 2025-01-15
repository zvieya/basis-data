<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['error'])){
    echo $_GET['error'];
    }
    ?>
    <form action = "proses_login.php" method= "post">
        <div>
            username
            <input type="text" name="username" />
        </div>
        <div>
            password
            <input type="password" name="password" />
        </div>

        <input type = "submit" nama= "login" value= "login">
</form>
</body>
</html>