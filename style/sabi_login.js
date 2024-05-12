const form = document.getElementById('form');
const username = document.getElementById('username');
const phone_number = document.getElementById('phone-number');
const user = document.getElementById('user');
const btn = document.getElementById('button');
const err = document.querySelector('#err2');
document.addEventListener('DOMContentLoaded', function(e){
    e.preventDefault();
form.addEventListener('click', function(){

validateInput();
})

const setError = function(element, message){
const inputControl = element.parentElement;
const errorDisplay = inputControl.querySelector('.error');
errorDisplay.innerText = message;

inputControl.classList.add('error');
inputControl.classList.remove('success');

}
const set_Error = function(element, message){
    const inputControl = element.parentElement;
    const error_Display = inputControl.querySelector('#err2');
    error_Display.innerText = message;
    
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
    
    }

const setSuccess = function(element){
const inputControl = element.parentElement;
const errorDisplay = inputControl.querySelector('.error');
errorDisplay.innerText = '';

inputControl.classList.add('success');
inputControl.classList.remove('error');
}
const set_Success = function(element){
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('#err2');
    errorDisplay.innerText = '';
    
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
    }
const validateInput = function(){
const userValue = username.value.trim();
const phoneValue = phone_number.value.trim();
const emailValue = user.value.trim();

if(userValue === ''){
setError(username, 'Name is required');
}
else{
setSuccess(username)
}

if(phoneValue === ''){
    set_Error(phone_number, 'Phone number is required');
    }
    else{
    set_Success(phone_number)
    }
    
if(emailValue === ''){
setError(user, 'Email is required');
}
else{
setSuccess(user);
}

if(userValue !== '' && phoneValue !== '' && emailValue !== '' ){
window.location.href = "sabi_verification.html";
}
}
console.log("What is wrong");

})