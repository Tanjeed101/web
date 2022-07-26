

<?php
session_start();
if ($_SESSION['flag1'] != true) {
    header('location: login.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
body {
  font-family: "Sofia", sans-serif;
}
</style>
	<link type="text/css" rel="stylesheet" href="c.css">

<style>
#myTable {
  border-collapse: collapse;
  width:80%;
  border: 1px solid #ddd;
  font-size: 20px;
}



#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}



#customers tr:nth-child(even){background-color: #f2f2f2;}



#customers tr:hover {background-color: #ddd;}



#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
}
</style>
</head>
<body>
	



 <fieldset>
        <table width='100%'>
            <tr>
                
                <td align='right'>
                    <nav>


                        <h3>Annual sales</h3>
                        <label>Logged in as<a href='viewprofile.php'> <?php echo $_SESSION['username'] ?> </a> </label>|
                        <a href='../controller/logout.php'>Log Out</a>
                        <br>
                         <a href='../view/dashboard.php'>Back</a>

                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>



<table id="myTable">
  <tr class="header">
    <th style="width:25%;">Month</th>
    <th style="width:25%;">Quantity</th>
    <th style="width:25%;">Sale</th>
    <th style="width:25%;">Profit</th>
  </tr>
  <tr>
    <td>January</td>
    <td>100</td>
     <td>10000</td>
    <td>5000</td>
  </tr>
  <tr>
    <td>February</td>
    <td>200</td>
     <td>20000</td>
    <td>10000</td>
  </tr>
  <tr>
    <td>March</td>
    <td>300</td>
     <td>30000</td>
    <td>15000</td>
  </tr>
  <tr>
    <td>April</td>
    <td>300</td>
     <td>40000</td>
    <td>20000</td>
  </tr>
  <tr>
    <td>May</td>
    <td>400</td>
     <td>34000</td>
    <td>17000</td>
  </tr>
  <tr>
    <td>June</td>
    <td>500</td>
     <td>44000</td>
    <td>22000</td>
  </tr>
  <tr>
    <td>July</td>
    <td>550</td>
     <td>38000</td>
    <td>18000</td>
  </tr>
  <tr>
    <td>August</td>
    <td>450</td>
     <td>56000</td>
    <td>26000</td>
  </tr>
</table>



</body>
</html>