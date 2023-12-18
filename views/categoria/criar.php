<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <form action="criar.php" method="post">
        <div class='container'>
            <div class='row'>
                <div class='col-12 col-md-8'>
                <label for="nome" class='form-label'>Nome:</label>
                <input type="text" class='form-control' name="nome" placeholder="Insira o nome da categoria">
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-12 col-md-4'>
            <input type="submit" value="Salvar" class="btn btn-primary " id="button"></input>
            </div>
            <div class='col-12 col-md-4'>
                <a type="button" class='btn btn-danger' href="listar.php">Cancelar</a>
            </div>
        </div>
        

    </form>

    <?php 
    include ('../../conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];

        $sql_categoria = 
            "INSERT INTO Categoria
                    (nome)
                VALUES
                    ('$nome')";

        if ($conexao->query($sql_categoria) === TRUE) {
            header("Location: listar.php");
        }
        else {
            echo "Erro: " . $conexao->error;
        }
    }
    
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>