<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANCO</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="corpo">

<header class="menu">
        <nav>
          <ul>
              <li><a href="index.html">Início</a></li>
              <li><a href="sobre.html">Sobre</a></li>
              <li><a href="produtos.html">Produtos</a></li>
              <li><a href="novidade.html">Novidade</a></li>
              <li><a href="contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>

    <h1 class="edp">ESTOQUE DE PRODUTOS</h1>
<table border="1" class="tabela">
        <thead>
            <tr class="azul">
                <td><strong>Código</strong></td>
                <td><strong>Nome</strong></td>
                <td><strong>Quantidade</strong></td>
            </tr>
        </thead>
        <tbody>
            <?php
            $conexao = new mysqli("localhost", "root", "", "detroit"); /* conexão */
            $consulta = $conexao->query("select * from produto");
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
            foreach ($resultado as $linha)
                echo ("<tr><td>" . $linha['codigo'] . "</td><td>" . $linha['nome']
                    . "</td><td>" . $linha['quantidade'] . "</td></tr>");
            $conexao->close();
            ?>
        </tbody>
</table><br><br><br><br>
<footer>
        <a href="https://www.instagram.com/spacex/">
            <button class="rs">
                 <img src="images/ins.PNG">
            </button>
        </a>
        <a href="https://x.com/XSpaces">
         <button class="rs">
              <img src="images/tw.PNG">
         </button>
         </a>
         <a href="https://www.linkedin.com/company/spacex/">
             <button class="rs">
                  <img src="images/link.PNG">
             </button>
         </a>
         <p>
             <a href="sobre.html">Sobre nós</a>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="contato.html">Contato</a>
             <br><br><br>
             © 2025 Detroit-Z. Todos os direitos reservados.
         </p>
     </footer>
</body>
</html>