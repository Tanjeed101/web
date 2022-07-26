
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
	<meta charset="utf-8">
  <link type="text/css" rel="stylesheet" href="c.css">
  <title>Annual sales and profit</title>
      
</head>

<body>




   <fieldset>
        <table width='100%'>
            <tr>
                
                <td align='right'>
                    <nav>
                        <h3>Medicie Inventory</h3>
                        <label>Logged in as<a href='viewprofile.php'> <?php echo $_SESSION['username'] ?> </a> </label>|
                        <a href='../controller/logout.php'>Log Out</a>
                        <br>
                         <a href='../view/dashboard.php'>Back</a>

                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
<br>
<br>


<br>
<br>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 60%;
  border: 1px solid #ddd;
  font-size: 20px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #ffffff;
}
</style>
</head>
<body>



<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for month.." title="Type in a name">

<table id="myTable">
<tr class="header">
<th style="width:25%;">Name</th>
<th style="width:25%;">Price</th>
<th style="width:25%;">Expire date</th>
<th style="width:25%;">QTY</th>
</tr>
<tr>
<td>Napa</td>
<td>100</td>
<td>10/02/23</td>
<td>150</td>
</tr>
<tr>
<td>Monas 10 </td>
<td>180</td>
<td>07/01/23</td>
<td>160</td>
</tr>
<tr>
<td>Ambrox</td>
<td>200</td>
<td>07/01/23</td>
<td>200</td>
</tr>
<tr>
<td>Bukof</td>
<td>250</td>
<td>12/01/23</td>
<td>190</td>
</tr>
<tr>
<td>Fexo</td>
<td>150</td>
<td>15/02/24</td>
<td>500</td>
</tr>
<tr>
<td>Sergel</td>
<td>100</td>
<td>05/12/24</td>
<td>900</td>
</tr>
<tr>
<td>HPR</td>
<td>200</td>
<td>07/01/23</td>
<td>100</td>
</tr>
<tr>
<td>Indever</td>
<td>80</td>
<td>03/09/23</td>
<td>130</td>
</tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
