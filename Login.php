<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <?php
        session_start();
    if(isset('$_POST'['login'])){
        if($_POST['Username'] == "rpl" && $_POST['Password'] == "rpl123"){
            echo"<script>alert('Welcome ');document.location.href='index.php'</script>";
        }else{
            echo"<script>alert('That Wrong Dude')</script>";
        }
    }
    ?>
</head>
<body>
    <form method="post">
        <tr>
            <td>Username</td>
            <td>:</td>
            <input type="text" name="Username">
        </tr>
        <br>
        <tr>
            <td>Password</td>
            <td>:</td>
            <input type="password" name="Password">
        </tr>
        <br>
        <tr>
            <td></td>
            <td></td>
            <input type="submit" name="Login" value="login">
        </tr>
    </form>
</body>
</html>