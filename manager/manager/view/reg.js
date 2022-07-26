 function validateform(){  
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const pass = document.getElementById('password').value;
     let repass = document.getElementById('confirmpassword').value;
     const uname = document.getElementById('username').value;
           
     if (name == null || name == "") {
        alert("Name can't be blank");  
        return false; 
     }
     
     else if (email == null || email == "") {
         alert("Email can't be blank");  
        return false;
     } 
    else if (phone == null || phone == "") {
        alert("Phone can't be blank");  
        return false;
     }
    
   else if (uname == null ||uname == "") {
        alert("UserName can't be blank");  
        return false;
    }

    else if (pass == null || pass == "") {
       alert("Password can't be blank");  
       return false;
     }

     else if(repass == ""){
		alert("Confirm Password can't be blank");  
        return false;
			}
     else {
         alert("Are You Sure You Want to Submit?");
          return true;
     }

    }



function namevalidation() {
    const name = document.getElementById('name').value;
        
    if (name == null || name == "") {
        document.getElementById('sname').innerHTML = '**Please Fillup Name field ';
    }
    else if (name.charAt(0) >= 0 && name.charAt(0) <= 9) {
        document.getElementById('sname').innerHTML = "**Username must start with a letter";
    }
    else if (name.length <4) {

         document.getElementById('sname').innerHTML = '**Name must be Gereater then 4 charecter';
         
     } 
        
    else {
         document.getElementById('sname').innerHTML = "**You can use this Username";
    }
}

function validateEmail() {
    const email = document.getElementById('email').value;
     if (email == null || email == "") {
        document.getElementById('semail').innerHTML = '**Please Fillup Email field ';
     }
    else if(email.length <5 ){
		document.getElementById('semail').innerHTML = '**Email is invalid !';	
     }
    else if(email.includes("@gmail.com")){
		document.getElementById('semail').innerHTML = '**Email seems valid ';
		     }
    else if(email.includes("@yahoo.com")){
		document.getElementById('semail').innerHTML = '**Email seems valid ';
		     }
    else if( email.includes("@.edu")){
		document.getElementById('semail').innerHTML = '**Email seems Valid';
		     }	
     else {
         document.getElementById('semail').innerHTML = '**Email is invalid';
    }
}

function validatephone() {
    const phone = document.getElementById('phone').value;
     if (phone == null || phone == "") {
        document.getElementById('sphone').innerHTML = '**Please Fillup Phone Number field ';
     }
     else if (isNaN(phone)) {

         document.getElementById('sphone').innerHTML = '**Please Enter Number for Phone field';
         
     }
       else if (phone.length <11) {

         document.getElementById('sphone').innerHTML = '**Please Enter 11 Degit for Phone field';
         
     }  
    
     else {
         document.getElementById('sphone').innerHTML = '**You can use this phone number';
    }
}

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

         document.getElementById('spass').innerHTML = '**Password  must be Gereater then 8 charecter';
         
     }  
    
    else {
         document.getElementById('spass').innerHTML = "**You can use this Password";
    }
}

 function validateRepassword(){
			let repass= document.getElementById('confirmpassword').value;
			let password= document.getElementById('password').value;
			
			if(repass == ""){
				document.getElementById('scpass').innerHTML = "**Please Fillup confirm password field ";
			}
			else if(repass != password){
				document.getElementById('scpass').innerHTML = "**Confirm password didnot match";
			}
			else{
				document.getElementById('scpass').innerHTML = "**Confirm Password Matched ! ";
			}
}
        


