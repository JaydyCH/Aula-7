<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="inserirProduto.php" method="post">

        <label for="txtNome">Nome do produto</label>
        <input type="text" name="txtNome" id="txtNome" autofocus required>
        <br><br>

        <label for="ddlCategoria">Categoria do Produto</label>
        <select name="ddlCategoria" id="ddlCategoria">
            <option value="">---Selecione a categoria---</option>
            <?php
            $sql = "SELECT * FROM tbcategoria ORDER BY nmCategoria";
            $dadosCategoria = $conn->query($sql);
            while ($exibirCategoria = $dadosCategoria->fetch_assoc()) {
            ?>
                <option value="<?php echo $exibirCategoria["idCategoria"] ?>"><?php echo $exibirCategoria["nmCategoria"] ?></option>
            <?php
            }
            ?>
        </select>

        <br><br>

        <label for="txtDesc">Descricao do Produto</label>
        <textarea name="txtDesc" id="txtDesc" cols="30" rows="10"></textarea>
        <br><br>

        <input type="submit" value="Salvar">
        <input type="reset" value="Cancelar">

    </form>
</body>

</html>