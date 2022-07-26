<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
body {
  font-family: "Sofia", sans-serif;
}
</style>
     <link type="text/css" rel="stylesheet" href="c.css">
</head>

<body>
    <fieldset>
        <table width='100%'>
            <tr>
                
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
        <label>

            <p>
                The pharmacy management system, also known as the pharmacy information system, is a system that stores data and enables functionality that organizes and maintains the medication use process within pharmacies.

                These systems may be an independent technology for the pharmacy's use only, or in a hospital setting, pharmacies may be integrated within an inpatient hospital.<button onclick="change_text()">Click to read more</button>
            <p id='demo'></p>
            <p id='demo1'></p>
            </p>
            <button onclick="change_text1()">Show our Branch </button>

        </label>
        <br><br><br><br>
    </fieldset>
    <fieldset>
        <script>
            "use strict"

            function change_text() {
                document.getElementById("demo").innerHTML = "So our company name is Osud Ar Dokan com. We have 5 Brunch in Dhaka city  ";
            }

            function change_text1() {
                document.getElementById("demo1").innerHTML = "1.Shantinagar 2.Banani 3.Gulsan 4.Bailyroad 5.Khilgao";
            }

            function setnewimg() {
                document.getElementById('logo').src = '../asset/logo1.jpg';
            }

            function setoldimg() {
                document.getElementById('logo').src = '../asset/logo.jpg';
            }
        </script>


        <?php
        include('footer.php');
        ?>