<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h2>Produtos cadastrados</h2>

    <?php
    include_once("conexao.php");

    $sql = "SELECT * FROM tbprodutos";

    $dadosProduto = $conn->query($sql);

    ?>
    <table class="table table-striped">
        <tr>
            <th>ID do Produto</th>
            <th>Nome do Produto</th>
            <th>Categoria do Produto</th>
            <th>Descricao do Produto</th>
        </tr>

        <?php

        while ($exibirProduto = $dadosProduto->fetch_assoc()) {

        ?>
            <tr>
                <td><?php echo $exibirProduto["idProduto"] ?></td>
                <td><?php echo $exibirProduto["nmProduto"] ?></td>

                <?php
                $sqlCategoria = "SELECT * FROM tbcategoria WHERE idCategoria = " . $exibirProduto["idCategoria"];
                $dadosCategoria = $conn->query($sqlCategoria);
                $exibirCategoria = $dadosCategoria->fetch_assoc();
                ?>
                <td><?php echo $exibirCategoria["nmCategoria"] ?></td>

                <td><?php echo $exibirProduto["descProduto"] ?></td>
            </tr>

        <?php
        }
        ?>
    </table>
</body>

</html>