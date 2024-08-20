<?php
    include('include/conexao.php');

    $tipo = $_POST['tipo'];

    if($tipo == 'entrada'){
        $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'entrada'";
    }
    else if($tipo == 'saida'){
        $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'saida'";
    }
    else if($tipo == 'saldo'){
        $sql = "SELECT SUM(CASE WHEN tipo  = 'entrada' THEN valor ELSE 0 END) - SUM(CASE WHEN tipo ='saida' THEN valor ELSE 0 END) as valor FROM fluxo_caixa";
    }

    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($result)){
        echo "Valor Resultante: ".$row['valor'];
    }
?>
<div>
    <a href="index.php">Voltar a tela inicial</a>
</div>