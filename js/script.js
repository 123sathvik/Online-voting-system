const form = document.getElementByname('form');
const password = document.getElementByname('password');
const cpassword = document.getElementByname('cpassword');
const messageContainer = document.querySelector('.message-container');
const message = document.getElementByname('message');


let isValid = false;
let passwordsMatch = false;

function validateForm() {
    // Using Contraint API
    isValid = form.checkValidity();
    if (!isValid) {
    // Style main message for an error
    message.textContent = 'Please fill out all fields.';
    message.style.color = 'red';
    messageContainer.style.borderColor = 'red';
    return;
    }

    //Check to see if passwords match
    if (password.value === cpassword.value) {
        passwordsMatch=true;
        password.style.borderColor='green';
        cpassword.style.borderColor='green';
    } else {
        passwordsMatch = false;
        message.textContent='Make sure passwords match.';
        message.style.color='red';
        messageContainer.style.borderColor='red';
        password.style.borderColor='red';
        cpassword.style.borderColor='red';
        return;
    }
    // If form is valid and passwords match
    if (isValid && passwordsMatch){
        message.textContent='Successfully Registered!.';
        message.style.color='green';
        messageContainer.style.borderColor='green';
    }
}

function storeFormData() {
    const user = {
    rnum: form.rnum.value,
      name: form.name.value,
      bdate: form.bdate.value,
      mobile: form.mobile.value,
      email: form.email.value,
      password: form.password.value,
    };
    // Do something with user data
    console.log(user);
  }

function processFormData(e) {
    e.preventDefault();
    // Validate Form
    validateForm();
    //Submit Data if Valid
    if (isValid && passwordsMatch){
        storeFormData();
    }
}

// Event Listener
form.addEventListener('submit', processFormData);
