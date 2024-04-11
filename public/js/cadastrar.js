let nome = document.getElementById("inputNome");
let sobrenome = document.getElementById("inputSobrenome");
let cidade = document.getElementById("inputCidade");
let estado = document.getElementById("inputEstado");
let email = document.getElementById("inputEmail");
let senha = document.getElementById("inputSenha");
let termo = document.getElementById("checkTermo");

//Validações Nome, Sobrenome, Cidade e Estado

// --- Nome
nome.addEventListener("input", function () {
  let inputNome = this.value.trim();
  let feedbackNome = document.getElementById("feedbackNome");

  if (inputNome.length >= 4) {
    feedbackNome.textContent = "Parece válido.";
    feedbackNome.classList.remove("invalid-feedback");
    feedbackNome.classList.add("valid-feedback");
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
    feedbackNome.style.display = "block";
  } else {
    feedbackNome.textContent = "Por favor, informe um nome válido.";
    feedbackNome.classList.remove("valid-feedback");
    feedbackNome.classList.add("invalid-feedback");
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    feedbackNome.style.display = "block";
  }
});

// --- Sobrenome
sobrenome.addEventListener("input", function () {
  let inputNome = this.value;
  let feedbackNome = document.getElementById("feedbackSobreNome");

  if (inputNome.length >= 4) {
    feedbackNome.textContent = "Parece válido.";
    feedbackNome.classList.remove("invalid-feedback");
    feedbackNome.classList.add("valid-feedback");
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
    feedbackNome.style.display = "block";
  } else {
    feedbackNome.textContent = "Por favor, informe um sobrenome válido.";
    feedbackNome.classList.remove("valid-feedback");
    feedbackNome.classList.add("invalid-feedback");
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    feedbackNome.style.display = "block";
  }
});
// --- Cidade

cidade.addEventListener("input", function () {
  let nomeCidade = this.value; // Renomeando a variável cidade para nomeCidade
  let feedbackCidade = document.getElementById("feedbackCidade");

  if (nomeCidade.length >= 3) {
    feedbackCidade.textContent = "Cidade válida.";
    feedbackCidade.classList.remove("invalid-feedback");
    feedbackCidade.classList.add("valid-feedback");
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
  } else {
    feedbackCidade.textContent = "Por favor, informe uma cidade válida.";
    feedbackCidade.classList.remove("valid-feedback");
    feedbackCidade.classList.add("invalid-feedback");
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
  }
});
// -- Estado
estado.addEventListener("change", function () {
  let estadoSelecionado = this.value;
  let feedbackEstado = document.getElementById("inputEstadoFeedback");

  if (estadoSelecionado) {
    feedbackEstado.textContent = "Estado válido.";
    feedbackEstado.classList.remove("invalid-feedback");
    feedbackEstado.classList.add("valid-feedback");
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
  } else {
    feedbackEstado.textContent = "Por favor, selecione um estado.";
    feedbackEstado.classList.remove("valid-feedback");
    feedbackEstado.classList.add("invalid-feedback");
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
  }
});
// -- E-mail
email.addEventListener("input", function () {
  let inputEmail = this.value;
  let feedbackEmail = document.getElementById("inputEmailFeedback");
  let re = /\S+@\S+\.\S+/;

  if (inputEmail.length >= 8 && re.test(inputEmail)) {
    feedbackEmail.textContent = "E-mail válido.";
    feedbackEmail.classList.remove("invalid-feedback");
    feedbackEmail.classList.add("valid-feedback");
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
  } else {
    feedbackEmail.textContent = "Por favor, digite um e-mail válido.";
    feedbackEmail.classList.remove("valid-feedback");
    feedbackEmail.classList.add("invalid-feedback");
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
  }
});

senha.addEventListener("input", function () {
  let inputSenha = this.value;
  let feedbackSenha = document.getElementById("inputSenhaFeedback");

  if (inputSenha.length >= 4) {
    feedbackSenha.textContent = "Senha válida.";
    feedbackSenha.classList.remove("invalid-feedback");
    feedbackSenha.classList.add("valid-feedback");
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
  } else {
    feedbackSenha.textContent =
      "Por favor, digite uma senha que tenha no minimo 4 caracteres.";
    feedbackSenha.classList.remove("valid-feedback");
    feedbackSenha.classList.add("invalid-feedback");
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
  }
});
// -- Termo

termo.addEventListener("change", function () {
  checkedTermo = this.checked;
  checkFeedback = document.getElementById("checkTermoFeedback");

  if (checkedTermo == true) {
    checkFeedback.classList.remove("invalid-feedback");
    checkFeedback.classList.add("valid-feedback");
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
  } else {
    checkFeedback.textContent =
      "Você deve concordar com os termos e condições antes de cadastrar.";
    checkFeedback.classList.remove("valid-feedback");
    checkFeedback.classList.add("invalid-feedback");
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
  }
});

//----------------------- --------------------------------------------------------------------
