<?php
    include('include/conexao.php');

    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'] == "entrada" ? true : false ;
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
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
    <h1>Alterando Fluxo de Caixa</h1>
    <?php
       echo "<p>Data: $data</p>";
       echo "Tipo: " . $tipo ? "Entrada" : "Saida". "<br>";
       echo "<p>Valor: $valor</p>";
       echo "<p>Historico: $historico</p>";
       echo "<p>Cheque: $cheque</p>";
       $sql = "UPDATE fluxo_caixa SET
                   data = '$data',
                   tipo = '$tipo',
                   valor = '$valor',
                   historico = '$historico',
                   historico = '$historico',
                   cheque = '$cheque'
               WHERE id = $id";
       $result = mysqli_query($con, $sql);
       if($result){
           echo "Dados atualizados";
       }
       else{
           echo "Erro ao atualizar dados!\n".mysqli_error($con);
       }
    ?>
</body>
</html>