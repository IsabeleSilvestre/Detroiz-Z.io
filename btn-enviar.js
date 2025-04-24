link.rel = 'stylesheet';
link.href = 'style.css';
 
document.addEventListener("DOMContentLoaded", function () {
    const botao = document.querySelector(".botao");

    if (botao) {
        botao.onclick = function (event) {
            event.preventDefault(); // Impede o envio do formulário e recarregamento da página
            this.innerHTML = "<div class='bolinha'></div>";
            setTimeout(() => {
                this.innerHTML = "Enviado!";
                this.style = "background:rgb(27, 165, 87); color: #ffffff; pointer-events: none;";
            }, 3000);
        };
    } else {
        console.error("Botão não encontrado!");
    }
});