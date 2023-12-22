<?php 

include('../../conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
    $id = $_GET['id'];

    $sql_delete = "DELETE FROM Categoria WHERE id=$id";

    if ($conexao->query($sql_delete) === TRUE) {
        header ("Location: listar.php");
    }
    else {
        echo "Erro ao deletar categoria: " . $conexao->error;
    }
}

?>