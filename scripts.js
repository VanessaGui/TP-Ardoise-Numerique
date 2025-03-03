let deleteItem = document.querySelectorAll('.delete');

for (let i = 0; i < deleteItem.length; i++) {
  if (deleteItem[i]) {
    deleteItem[i].addEventListener('click', (e) => {
      if(!confirm('Êtes-vous sûr de vouloir supprimer cette ardoise ?') == true){
        e.preventDefault();
      }
    });
  }
}

function setupFormArdoiseConnexion(formSelector) {
  let formAuth = document.querySelector(formSelector);

if (formAuth) {
  let error = document.querySelector(".error");

  formAuth.addEventListener("submit", (e) => {
    let login = document.querySelector(".login-form");
    let password = document.querySelector(".password-form");
    let message = "Veuillez entrer un login et un mot de passe valides";
    let value = login.value;
    let passwordValue = password.value;

    if (
      value.length === 0 ||
      passwordValue.length === 0 ||
      value.length < 6 ||
      passwordValue.length < 6
    ) {
      error.textContent = message;
      e.preventDefault();
      setTimeout(() => {
        location.reload();
      }, 1500);
    }
  });
}
}
setupFormArdoiseConnexion('#form-connect');
setupFormArdoiseConnexion('#form-auth');

function setupFormArdoiseValidation(formSelector) {
  let formArdoise = document.querySelector(formSelector);

  if (formArdoise) {
  let error = document.querySelector(".error");
  
  formArdoise.addEventListener("submit", (e) => {
    let name = document.querySelector(".ardoise-name");
    let price = document.querySelector(".ardoise-price");
    let message = "Veuillez entrer des données valides";
    let value = name.value;
    let priceValue = parseFloat(price.value);

    if (value.length === 0 || isNaN(priceValue) || priceValue < 0) {
      error.textContent = message;
      e.preventDefault();
      setTimeout(() => {
        location.reload();
      }, 1500);
    }
  });
}
}
setupFormArdoiseValidation('#form-ardoise');
setupFormArdoiseValidation('#form-modif-ardoise');