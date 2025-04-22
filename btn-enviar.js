link.rel = 'stylesheet';
link.href = 'style.css';

const botao = document.querySelector(".botao");

botao.onclick = function(){
    this.innerHTML = "<div class='bolinha'></div>";
    setTimeout(() => {
        this.innerHTML = "Enviado!";
        this.style = "background:rgb(27, 165, 87); color: #ffffff; pointer-events: none;";
    }, 3000);
}   