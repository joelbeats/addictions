function validateForm() {
    var _fName = document.forms["contactForm"]["fname"].value;
    var _lName = document.forms["contactForm"]["lname"].value;
    var _eMail = document.forms["contactForm"]["email"].value;
    var _message = document.forms["contactForm"]["message"].value;
    if (_fName == "" || _lName == "" || _eMail == "" || _message == "") {
      alert("Textfields must be filled out");
      return false;
    }
  }

    function ValidateEmail(inputText) {
  
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  
    if(inputText.value.match(mailformat)) {
        document.contactForm.email.focus();
        return true;
    } else {
      alert("You have entered an invalid email address!");
      document.contactForm.email.focus();
      return false;
    }
  }