<?php

session_start();
require_once '../classes/UserLogic.php';
ini_set('display_errors',true);

if(!$logout = filter_input(INPUT_POST,'logout')){
    exit('不正なリクエストです！');
}

//Loginしてるか判定し、sessionが切れていたらログインしてくださいとメッセージ出す
$result = UserLogic::checkLogin();
if(!$result){
    exit ('Session is timeout!!'."\n".'Please login again!!');
}

//Logout 
UserLogic::logout();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h2>Logout Completed</h2>
    <p>Logout Completed!</p>
    <p>See you next time!</p>
    <a href="login_form.php">Go to Login Page!!</a>

</body>
</html>