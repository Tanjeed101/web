<?php
session_start();
if (isset($_POST['logusername']) && isset($_POST['logpassword'])) {
    $username = $_POST['logusername'];
    $password = $_POST['logpassword'];
    if ($username == "" || $password == "") {
        echo "Null submission \r\n";
    } else {

        if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {


            if (!empty($_POST['remember'])) {
                setcookie('logusername', $username, time() + (1 * 30)); // 86400 = 1 day
                setcookie('logpassword', $password, time() + (1* 30));
            } else {
                if (isset($_COOKIE['logusername'])) {
                    setcookie('logusername', '');
                }
                if (isset($_COOKIE['logpassword'])) {
                    setcookie('logpassword', '');
                }
            }

            $_SESSION['flag1'] = true;
            header('location: ../view/dashboard.php');
        } else {
            echo "Please Enter Valid Username and password! \r\n";
            header('location:  ../view/login.php');
        }
    }
}
