function usernamevalidation() {
    const name = document.getElementById('username').value;
        
    if (name == null || name == "") {
        document.getElementById('susername').innerHTML = '**Please Fillup userName field ';
    }
    else if (name.charAt(0) >= 0 && name.charAt(0) <= 9) {
        document.getElementById('susername').innerHTML = "**Username must start with a letter";
    }
    else if (name.length <3) {

         document.getElementById('susername').innerHTML = '**User name must be Gereater then 3 charecter';
         
     }  
    
    else {
         document.getElementById('susername').innerHTML = "**You can use this Username";
    }
}

function passwordvalidation() {
    const pass = document.getElementById('password').value;
        
    if (pass == null || pass == "") {
        document.getElementById('spass').innerHTML = '**Please Fillup password field ';
    }

    else if (pass.length <8) {

         document.getElementById('spass').innerHTML = '**User name must be Gereater then 8 charecter';
         
     }  
    
    else {
         document.getElementById('spass').innerHTML = "**You can use this Password";
    }
}
function validateform(){
const pass = document.getElementById('password').value;
const name = document.getElementById('username').value;
if (name == null || name == "") {
    alert("Name can't be blank");  
        return false; 
    }
    else if (pass == null || pass == "") {
    alert("Password can't be blank");  
       return false;    
    
    }
    else {
         alert("Are You Sure You Want to LogIN");
          return true;
     }



}