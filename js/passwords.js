// Function to show the password of the input in the Log in modal
function showPwd(){
  document.getElementById("pwdLogIn").setAttribute("type", "text");
}
function hidePwd(){
  document.getElementById("pwdLogIn").setAttribute("type", "password");
}

// Function to show the password of the first passowrd input in the sign up modal
function showPwd1(){
  document.getElementById("pwdSignUp1").setAttribute("type", "text");
}
function hidePwd1(){
  document.getElementById("pwdSignUp1").setAttribute("type", "password");
}

// Function to show the password of the first passowrd input in the sign up modal
function showPwd2(){
  document.getElementById("pwdSignUp2").setAttribute("type", "text");
}
function hidePwd2(){
  document.getElementById("pwdSignUp2").setAttribute("type", "password");
}

console.log("Script passwords is working");
// Code to generate a random password for the user iwth lower and upper case letters, symbols and pontuation
const arrayOfASCIINumbers = [33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,91,92,93,94,95,96,123,124,125,126,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,128,130,132,163];

function generatePassword(){
  var lenghtPassword = 0;
  lenghtPassword = Math.floor(Math.random() * 20 + 30);
  var generatedPassword = [];
  var randomPosition = "";
  for(var i=0; i<lenghtPassword; i++){
    randomPosition = arrayOfASCIINumbers[Math.floor(Math.random() * arrayOfASCIINumbers.length)];
    var randomCharacter = String.fromCharCode(randomPosition);
    generatedPassword.push(randomCharacter);
  }
  console.log(generatedPassword.join(''));
  $('input[name="pwd"]').val(generatedPassword.join(''));
  $('input[name="pwd-repeat"]').val(generatedPassword.join(''));
}

