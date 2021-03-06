<?php

session_start();
require_once '../public/functions.php';
require_once '../classes/UserLogic.php';

$result = UserLogic::checkLogin();
if($result){
    header('Location: mypage.php');
    return;
}


$login_err = isset($_SESSION['login_err']) ? $_SESSION['login_err'] : null;
unset($_SESSION['login_err']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>New Registration Form</h2>
    <?php if(isset($login_err)): ?>
            <p><?php echo $login_err; ?></p>
    <?php endif; ?>
    <form action="register.php" method="POST">
    <p>
        <label for="username">UserName: </label>
        <input type="text" name="username">
    </p>
    <p>
        <label for="email">Email: </label>
        <input type="email" name="email">
    </p>
    <p>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </p>
    <p>
        <label for="password_conf">Password(Confirm): </label>
        <input type="password" name="password_conf">
    </p>
    <input type="hidden" name="csrf_token"
    value="<?php echo h(setToken())?>">
    <p>
        <input type="submit" value="Register">
    </p>

    </form>    
    <h3><a href="login_form.php">Login Here!</a></h3>

</body>
</html>