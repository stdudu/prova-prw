<?php
    include('include/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
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
<form action="altera_fluxo_caixa_exe.php" method="post">
        <fieldset style="width: 25%;">
            <legend>Cadastro do Fluxo de Caixa</legend>
            <div>
                <label for="data">Data:</label>
                <input type="date" name="data" id="data" value="<?php echo $row['data']?>" >
            </div>
            <br>
            <div>
                <label for="Tipo">Tipo:</label>
                <input type="radio" name="tipo" id="tipo-entrada" value="entrada"<?php echo $row['tipo'] == 0 ? "checked" : ""?>>
                <span>Entrada</span>
                <input type="radio" name="tipo" id="tipo-saida" value="saida"<?php echo $row['tipo'] == 0 ? "checked" : ""?>>
                <span>Saída</span>
            </div>
            <br>
            <div>
                <label for="valor">Valor:</label>
                <input type="number" name="valor" id="valor" value="<?php echo $row['valor']?>">
            </div>
            <br>
            <div>
                <label for="historico">Histórico:</label>
                <input type="text" name="historico" id="historico" value="<?php echo $row['historico']?>">
            </div>
            <br>
            <div>
                <label for="cheque">Cheque:</label>
                <select name="cheque" id="cheque">
                    <option value="Sim"<?php echo $row['cheque'] == "Sim" ? "selected" : "" ?>>Sim</option>
                    <option value="Nao"<?php echo $row['cheque'] == "Nao" ? "selected" : "" ?>>Não</option>
                </select>
            </div>
            <br>
            <div>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
            </div>
            <div class="enviar">
                <button type="submit">Enviar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>