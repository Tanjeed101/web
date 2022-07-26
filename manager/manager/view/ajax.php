
    <?php
session_start();
if ($_SESSION['flag1'] != true) {
    header('location: login.php');
}
?>

        
<!DOCTYPE html>
<html>
<body><div id="demo">
	




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
	

<link type="text/css" rel="stylesheet" href="c.css">


<button type="button" onclick="loadDoc()">Click here</button>
</div><script>
function loadDoc() {
const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
document.getElementById("demo").innerHTML =
this.responseText;
}
xhttp.open("GET", "A.php");
xhttp.send();
}
</script></body>
</html>

