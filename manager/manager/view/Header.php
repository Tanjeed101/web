<?php
session_start();
if ($_SESSION['flag1'] != true) {
    header('location: login.php');
}
?>
<script>
    "use strict"

  
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
    <meta charset="UTF-8">
    <title><?= $title ?></title>
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
                        <label>Logged in as<a href='viewprofile.php'> <?php echo $_SESSION['username'] ?> </a> </label>|
                        <a href='../controller/logout.php'>Log Out</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td width='30%'>
                <label>Account</label>
                <br>
                <hr>
                <ul>
                    <li><a href='dashboard.php'>Dashboard</a></li>
                   <li><a  href='../view/Medicineinventory.php'>Medicine Inventory</a></li>
                    <li><a  href='../view/ajax.php'>Annual sales</a></li>
                    <li><a href='Managestaff.php'>Manage staff</a></li>
                   
                   
                </ul>

            </td>