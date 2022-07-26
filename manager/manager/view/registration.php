 <script>
     "use strict"

   

   
     
 </script>

 <!DOCTYPE html>

 <head>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
body {
  font-family: "Sofia", sans-serif;
}
</style>
     <title>Registration</title>
      <link type="text/css" rel="stylesheet" href="c.css">
      
 </head>

 <body>
     <fieldset>
         <table width='100%' height=100>
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
         <fieldset>
             <legend>
                 <b>REGISTRATION</b>
             </legend>
             <form action='../controller/checkreg.php' method='POST' onsubmit="return validateform()">
                 <script type="text/javascript" src="reg.js"></script>
                 <table>
                     <tr>
                         <td>
                             Name:
                         </td>
                         <td>
                             <input type="text" name='name' id='name' onblur="namevalidation()" onkeyup="namevalidation()">
                             <span id="sname" style="color:red"> </span>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <hr>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Email:
                         </td>
                         <td>
                             <input type="email" name='email' id='email' onkeyup="validateEmail()" onblur="validateEmail()">
                             <span id="semail" style="color:red"> </span>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <hr>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Phone Number:
                         </td>
                         <td>
                             <input type="text" name='phonenumber' id='phone' onkeyup="validatephone()" onblur="validatePhone()">
                             <span id="sphone" style="color:red"> </span>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <hr>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Username:
                         </td>
                         <td>
                             <input type="username" name='username' id='username' onblur="usernamevalidation()" onkeyup="usernamevalidation()">
                             <span id="susername" style="color:red"> </span>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <hr>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Password:
                         </td>
                         <td>
                             <input type="password" name='password' id='password' onblur="passwordvalidation()" onkeyup="passwordvalidation()">
                             <span id="spass" style="color:red"> </span>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <hr>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             Confirm Password:
                         </td>
                         <td>
                             <input type="password" name='confirmpassword' id='confirmpassword' onblur='validateRepassword()' onkeyup='validateRepassword()'>
                             <span id="scpass" style="color:red"> </span>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <hr>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <fieldset>
                                 <legend>
                                     <b>Gender</b>
                                 </legend>
                                 <input type='radio' name='gender' value='male'>Male
                                 <input type='radio' name='gender' value='female'>Female
                                 <input type='radio' name='gender' value='others'>Others
                             </fieldset>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <fieldset>
                                 <legend>
                                     <b>Date of Birth</b>
                                 </legend>
                                 <input type='number' name='date' max=31 min=1>/
                                 <input type='number' name='month' max=12 min=1>/
                                 <input type='number' name='year' max=2100 min=1900>
                                 <label><i>dd/mm/yyyy</i></label>
                             </fieldset>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <input type='submit' name='submit' value='Submit'>
                             <input type='reset' value='Reset'>
                         </td>
                     </tr>
                 </table>
             </form>
         </fieldset>
         <?php
            include('footer.php');
            ?>