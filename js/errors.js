// Handling the errors

var parameters = window.location.search; // Get all the parameters in the url
var urlParameters = new URLSearchParams(parameters); // API to deal with parameters
var errorBoxText = document.querySelector("#errorBoxText"); // Get the text of box-error element
var errorBox = document.querySelector(".box-error"); // Get the box-error element

$("#errorButton").on('click', () => { // Adds an event listener to error box button
  errorBox.style.animation = "none"; // Erases the animation of the error box
});

var error = urlParameters.get("error"); // Gets the url parameter error
if(urlParameters.has('error')){ // If it has the parameter error
  if(error === "emptyfields"){ // If the error is emptyfields
    errorBoxText.innerHTML = "Por favor preencha todos os campos."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "sqlerror"){
    errorBoxText.innerHTML = "Não conseguiu executar o pedido."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "wrongpassword"){
    errorBoxText.innerHTML = "Insira a password correta."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "nouser"){
    errorBoxText.innerHTML = "Não foi encontrado nenhum registo na base de dados."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "invalidusername"){
    errorBoxText.innerHTML = "O nome de utilizador não é válido. Insira um nome de utilizador válido."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "passwordcheck"){
    errorBoxText.innerHTML = "As duas palavras-passe não são iguais. Insira a mesma password em ambos os campos."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "usertaken"){
    errorBoxText.innerHTML = "O nome de utilizador já está ocupado. Insira outro."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "registrationunsuccessfulrecaptchaorsubmit"){
    errorBoxText.innerHTML = "Clique no botão não sou um robo ou registe-se no formulário."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "loginunsuccessfulrecaptchaorsubmit"){
    errorBoxText.innerHTML = "Clique no botão não sou um robo ou faça login no formulário."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "codenotfound"){
    errorBoxText.innerHTML = "Código de autorização não encontrado."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }else if(error === "tokennotallowed"){
    errorBoxText.innerHTML = "Token não é válido."; // Sends a message box
    errorBox.style.animation = "showErrorMessage 2s cubic-bezier(.24,.64,.65,1.30) forwards"; // Loads animation
  }
}