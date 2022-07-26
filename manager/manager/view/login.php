<?php
session_start();
if (isset($_SESSION['flag'])) {
?>
    <script>
        "use strict"

        function change_text() {
            document.getElementById("demo").innerHTML = "So our company name is Osud Ar Dokan com. We have 5 Brunch in Dhaka city  ";
        }

        function change_text1() {
            document.getElementById("demo1").innerHTML = "1.Shantinagar 2.Banani 3.Gulsan 4.Bailyroad 5.Khilgao";
        }

        
    </script>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
body {
  font-family: "Sofia", sans-serif;
}
</style>
        
        <title>Login</title>
         <link type="text/css" rel="stylesheet" href="c.css">
    </head>

    <body>
        <fieldset>
            <table width='100%'>
                <tr>
                    <td>
                       
                    </td>
                    <td align='right'>
                        <nav>
                            <a href='home.php'>Home</a> |
                            <a href='login.php'>Log In</a> |
                            <a href='registration.php'>Registration</a>
                        </nav>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                LOGIN
            </legend>
            <form action='../controller/checklogin.php' method='POST' onsubmit="return validateform()">
                <script type="text/javascript" src="log.js"></script>
                <table>
                    <tr>
                        <td>
                            User Name:
                        </td>
                        <td>
                            <input type="text" name='logusername' value="<?php if (isset($_COOKIE['logusername'])) {
                                                                                echo $_COOKIE['logusername'];
                                                                            } ?>" id='username' onblur="usernamevalidation()" onkeyup="usernamevalidation()">
                            <span id="susername" style="color:red"> </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name='logpassword' value="<?php if (isset($_COOKIE['logpassword'])) {
                                                                                    echo $_COOKIE['logpassword'];
                                                                                } ?>" id='password' onblur="passwordvalidation()" onkeyup="passwordvalidation()">
                            <span id="spass" style="color:red"> </span>
                        </td>
                    </tr>
                      <tr>
                        <td colspan="2">
                            <input type='checkbox' name="remember" <?php if (isset($_COOKIE['logusername'])) {
                                                                        echo "checked";
                                                                    } ?>> Remember Me
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                   
                    <tr>
                        <td colspan="2">
                            <input type='submit' name='submit' value='submit'>
                            
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>

    </html>

<?php

} else {
    echo "Please do Registration before login in";
    header('location: registration.php');
}

?>