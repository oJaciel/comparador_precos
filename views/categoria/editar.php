<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
include '../../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];


    $sql = "UPDATE Categoria SET  nome='$nome'  WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        header("Location: listar.php");
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT id, nome FROM categoria WHERE id= '$id'";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        $categoria = $result->fetch_assoc();
    } else {
        echo "Essa categoria não existe";
        exit;
    }
}


$conexao->close();
?>

<body>

    <div class="container mt-3 pt-3">
        <form action="editar.php" method="post" class="row g-3">

            <div class="col-12">
                <div class="bg-primary opacity-75 p-3 text-center mb-2 text-white fw-bolder fs-3">
                    Editar Cadastro
                </div>
            </div>

            <div class="col-2">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" id="id" value="<?= $categoria['id']; ?>" readonly>
            </div>


            <div class="col-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o nome" value="<?= $categoria['nome']; ?>" required>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <input type="submit" value="Atualizar" class="btn btn-primary w-100 bg-gradient p-3 text-center mb-2 mt-5 text-white fw-bolder fs-3" id="button"></input>
                </div>

                <div class="col-md-4">
                    <a type="button" href="listar.php" class="btn btn-danger w-100 p-3 text-center mb-2 mt-5 text-white fw-bolder fs-3" id="button">Cancelar</a>
                </div>
            </div>

        </form>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>