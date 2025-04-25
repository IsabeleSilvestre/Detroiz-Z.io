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

    <h1 class="edp">ESTOQUE DE PRODUTOS</h1>
<table border="1" class="tabela">
        <thead>
            <tr class="azul">
                <td><strong>Código</strong></td>
                <td><strong>Nome</strong></td>
                <td><strong>Quantidade</strong></td>
            </tr>
        </thead>
        <tbody class="corpo">
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
</table>
</body>
</html>