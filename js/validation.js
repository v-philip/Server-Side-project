function email_validation(){
  'use strict';
  var email_name = document.getElementById("email");
  var email_value = document.getElementById("email").value;
  if(email_value !== "admin@admin.com")
  {
  document.getElementById('email_err').innerHTML = 'Invalid email address!';
  email_name.focus();
  document.getElementById('email_err').style.color = "#FF0000";
  }
  else{
      document.getElementById('email_err').innerHTML = '';
  }
  }


passwordInput.addEventListener("change", function() {
  const passwordValue = passwordInput.value.trim();
  
  if (passwordValue === "") {
   document.getElementById("pass-error").innerHTML = "Password is required";
  } else {
    passwordError.innerHTML = "";
  }
});

    