document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("#formContato");
  const botao = document.querySelector("#meuBotao");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const nome = document.querySelector("#nome").value.trim();
    const email = document.querySelector("#email").value.trim();
    const mensagem = document.querySelector("#mensagem").value.trim();

    const emailValido =
      email.endsWith("@gmail.com") ||
      email.endsWith("@outlook.com") ||
      email.endsWith("@hotmail.com");

    if (nome === "" || email === "" || mensagem === "") {
      window.alert("Por favor, preencha todos os campos!");
      return;
    }

    if (!emailValido) {
      window.alert("Por favor, insira um e-mail válido como @gmail.com, @outlook.com ou @hotmail.com");
      return;
    }

    window.alert("Mensagem enviada com sucesso!");

    botao.innerHTML = "Enviado!";
    botao.style.background = "rgb(27, 165, 87)";
    botao.style.color = "#ffffff";
    botao.disabled = true;

    setTimeout(() => {
      location.reload();
    }, 2000);
  });
});
