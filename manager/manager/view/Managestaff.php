

<?php
session_start();
if ($_SESSION['flag1'] != true) {
    header('location: login.php');
}
?>



<!DOCTYPE html>
<head>
    <title>Manage Staff</title>
    <link type="text/css" rel="stylesheet" href="c.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
body {
  font-family: "Sofia", sans-serif;
}
</style>
</head>

<body id="body">


 <fieldset>
        <table width='100%'>
            <tr>
                
                <td align='right'>
                    <nav>
                        <h3>Manage Staff</h3>
                        <label>Logged in as<a href='viewprofile.php'> <?php echo $_SESSION['username'] ?> </a> </label>|
                        <a href='../controller/logout.php'>Log Out</a>
                        <br>
                         <a href='../view/dashboard.php'>Back</a>

                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>



 

   


    
    



    <table>

        <tr>
            <td>
                <form autocomplete="off" onsubmit="onFormSubmit()">
                    <div>
                        <label for="SID">SID</label>
                        <input type="number" name="SID" id="SID">
                    </div>
                    <div>
                        <label for="Sname">Sname</label>
                        <input type="text" name="Sname" id="Sname">
                    </div>
                    <br>
                    <br>
                    <div>
                        <label for="DOB">DOB</label>
                        <input type="date" name="DOB" id="DOB">
                    </div>
                    <br>
                    <br>
                    <div>
                        <label for="Salary">Salary</label>
                        <input type="number" name="Salary" id="Salary">
                    </div>

                    <div class="form_action--button">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </div>
                </form>

                <td>
                    <table class="list" id="storeList">
                        <thead>
                            <tr>
                                <th>SID</th>
                                <th>Sname</th>
                                <th>DOB</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </td>
            </td>
        </tr>
    </table>
    <script type="text/javascript" src="./Managestaff.js"></script>
</body>
</html>





