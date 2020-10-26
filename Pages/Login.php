<?php
require_once '../config.php';
?>
<!----------------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Login</title>
</head>
<body>
<!----------------------------------------------------------------------------------------------------------------->
<?php
    require_once '../Functions/Validation.php';
    $error_message = Check_login();
?>
<!----------------------------------------------------------------------------------------------------------------->
    <h1 class="header"> Login With session and and cookie</h1>
    <div>
        <div id ="form1">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <label>Email: </label>
                <input type="email" name ="email" placeholder = "email" id="in1" > <br>
                <label>Password: </label>
                <input type="password" name ="password"  placeholder = "user name" id="in2"> <br>
                <input type="checkbox" id="check_box" value="1" name="remember" checked>
                <label id="small">Remember me</label> <br>
                <input type="submit" name="submit" value="Login" id= "in4">
            </form>
        </div>
        <?php require_once BL.'Functions/messages.php' ;?>
    </div>

<!----------------------------------------------------------------------------------------------------------------->
<?php
    Check_Cookie();
?>
<!----------------------------------------------------------------------------------------------------------------->
</body>
</html>