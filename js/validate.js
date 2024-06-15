function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = error_msg;
}

function validateForm() {
  // Retrieving the values of form elements
  var name = document.contactForm.name.value;
  var gender = document.contactForm.gender.value;

  // Defining error variables with a default value
  var nameErr = (emailErr = mobileErr = countryErr = genderErr = true);

  // Validate name
  if (name == "") {
    printError("nameErr", "Please enter your name");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name) === false) {
      printError("nameErr", "Please enter a valid name");
    } else {
      printError("nameErr", "");
      nameErr = false;
    }
  }

  // Validate gender
  if (gender == "") {
    printError("genderErr", "Please select your gender");
  } else {
    printError("genderErr", "");
    genderErr = false;
  }

  // Prevent the form from being submitted if there are any errors
  if ((nameErr || emailErr || genderErr) == true) {
    return false;
  } else {
    // Creating a string from input data for preview
    var dataPreview =
      "You've entered the following details: \n" +
      "Full Name: " +
      name +
      "\n" +
      "Gender: " +
      gender +
      "\n";
    // Display input data in a dialog box before submitting the form
    alert(dataPreview);
  }
}
