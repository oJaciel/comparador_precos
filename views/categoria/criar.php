  <?php
    include('../../conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];

        $sql_categoria =
            "INSERT INTO Categoria
                    (nome)
                VALUES
                    ('$nome')";

        if ($conexao->query($sql_categoria) === TRUE) {
            header("Location: listar.php");
        } else {
            echo "Erro: " . $conexao->error;
        }
    }

    ?>
