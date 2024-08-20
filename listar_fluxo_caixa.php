<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('include/conexao.php');

        $sql = "SELECT * FROM fluxo_caixa";

        $result = mysqli_query($con, $sql);
    ?>
    <h1 style="text-align: center">Consulta de Fluxo de Caixa</h1>
    <table align="center" border="1" width="50% " style="background-color: lightblue;">
        <tr>
            <th>Codigo</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['data']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "<td>".$row['historico']."</td>";
                    echo "<td>".$row['cheque']."</td>";
                    echo "<td><a href = 'altera_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href = 'deleta_fluxo_caixa.php?id=".$row['id']."'>Deletar</a></td>";
                }
            ?>
    </table>
    <div>
    <a href="index.php">Voltar a tela inicial</a>
    </div>
</body>
</html>