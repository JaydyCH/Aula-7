<?php
include_once("conexao.php");

$nmProduto = $_POST["txtNome"];
$categoria = $_POST["ddlCategoria"];
$descProduto = $_POST["txtDesc"];

$sql = "INSERT INTO tbprodutos (nmProduto, descProduto, idCategoria)
 VALUES ('$nmProduto', '$descProduto', $categoria)";

echo $sql;
