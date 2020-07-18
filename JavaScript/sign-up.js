function checkPassword(str)
  {
  var re =  /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}/;
    return re.test(str);
  }

  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
	if(form.usn.value==""){
		       alert("USN cannot be blank");
			   form.usn.focus();
			   return false;
	}
	u =/^\d{1}[A-Z][A-Z]\d{2}[A-Z][A-Z]\d{3}$/;
	if(!u.test(form.usn.value)){
		 alert("Error:Invalid USN");
		 form.usn.focus();
		 return false;
	}
    if(form.number.value==""){
         alert("Error:Phone number cannot be blank");
         form.number.focus();
         return false;
		}
		phoneno=/^\d{10}$/;
	    if(!phoneno.test(form.number.value)){
          alert("Error:Phone number must contain 10 digits!");
          form.number.focus();
          return false;
	}
	if(form.mail.value==""){
		alert("Email-id cannot be blank:");
		form.mail.focus();
		return false;
	}
   if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(!checkPassword(form.pwd1.value)) {
        alert("The password must contain atleast 1 uppercase letter.lowercase letter and digit.It must contain atleast 6 characters");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }
  }
