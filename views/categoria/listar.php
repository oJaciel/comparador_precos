<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Criado em</th>
                <th>Atualizado em</th>
            </tr>
        </thead>

        <tbody>
        
        <?php 
            include('../../conexao.php');

            $sql_categoria = "SELECT * FROM Categoria";

            $pesquisa = $conexao->query($sql_categoria);

            if ($pesquisa->num_rows > 0) {
                while ($row = $pesquisa->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th>" . $row["id"] . "</th>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["criado_em"] . "</td>";
                    echo "<td>" . $row["atualizado_em"] . "</td>";
                    echo "<td> 
                    <script> 
        function ConfirmaExclusao() {
      if (confirm('Tem certeza que deseja excluir esse registro?'))
           location.href='excluir.php?id=" . $row["id"] . "';
}
        </script>
        
        <a class = 'btn btn-primary'href='editar.php?id=" . $row["id"] . "'>Editar</a>
        
        <button class  = 'btn btn-danger' onClick='ConfirmaExclusao()' href='excluir.php?id=" . $row["id"] . "'>Deletar</button></td>";
                }
            }
    

        ?>

        </tbody>
    </table>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>