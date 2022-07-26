<script>
    "use strict"

    function change_text() {
        document.getElementById("demo").innerHTML = " We have 5 Brunch in Dhaka city  ";
    }

    function change_text1() {
        document.getElementById("demo1").innerHTML = "1.Shantinagar 2.Banani 3.Gulsan 4.Bailyroad 5.Khilgao";
    }

   
</script>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
body {
  font-family: "Sofia", sans-serif;
}
</style>
    <title> HOME</title>
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
                        <a href='registration.php'>Registration</a> |
                        <a href='AboutUs.php'>About Us</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <br> <br><br>
       <center>
        <label>
            <h1>
                                              Welcome  Manager
            </h1>
        </label>
        </center>
        <br><br><br><br>
    </fieldset>
    <fieldset>
        <?php
        include('footer.php');
        ?>