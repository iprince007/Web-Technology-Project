var username = document.forms['myForm'] ['uid'];
var pass = document.forms['myForm'] ['pwd'];

var username_error = document.getElementById("uid_error").value;
var pass_error = document.getElementById("pass_error").value;

function validated() {
    
     if (username.value.length <3) {
			 window.alert("Username must be more than 2 characters");
			 return false;
    }
    else if (pass.value.length <3) {
         window.alert("Password must be more than 2 characters");
			 return false;
    }

}

