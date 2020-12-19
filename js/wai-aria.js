var formSignUp = document.querySelector('#signupForm');
var checkboxSignUp = formSignUp.querySelector('#invalidCheck');
var allowed = false;

function toggleButton() {
  var nonvisualHint = formSignUp.querySelector('.visually-hidden');
  var submitButton = formSignUp.querySelector('#submitSignUp');
  if (allowed) {
    submitButton.setAttribute('aria-disabled', 'false');
    nonvisualHint.textContent = 'Por favor clique no botão cadastrar-se para se cadastrar no website.';
  } else {
    submitButton.setAttribute('aria-disabled', 'true');
    nonvisualHint.textContent = 'Por favor aceite os nossos termos e condições verificando a caixa de verificação.';
  }
}

toggleButton();
checkboxSignUp.addEventListener('change', function() {
  allowed = checkboxSignUp.checked;
  toggleButton();
});