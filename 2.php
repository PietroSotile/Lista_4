<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">
<div class="container text-center mt-5 mb-5">
    <h1 class="display-4">Percentual de Ajuste</h1>
</div>
<div class="container">
    <form class="form-horizontal" action="2.php" method="get">
    <div class="form-group mb-2">
    <label class="control-label col-sm-2" for="precoInicial">Preço a ser ajustado:</label>
        <div class="col-sm-3">
            <input min="1" step="0.01" required class="form-control" placeholder="Preço a ser ajustado" type="number" name="precoInicial" id="precoInicial">
        </div>
        <div class="form-group mb-2">
            <label class="control-label col-sm-2" for="comando">Percentual de ajuste:</label>
            <div class="col-sm-3">
                <input type="number" required step="0.01" class="form-control" name="percentual" id="percentual" placeholder="Percentual de ajuste">
                <label class="control-label col-sm text-muted" for="percentual"><small>Utilize valores negativos para descontos!</small></label>
            </div>
            <input type="submit" class="btn bg-dark text-white mt-2" value="Prosseguir"></input>
        </div>
    </form>
</div>
<?php
function ajuste($precoInicial, $percentual){
    $precoFinal = $precoInicial + $precoInicial/100*$percentual;
    return $precoFinal;
}
function ajusteDireto(&$precoInicial, $percentual){
    $precoInicial = $precoInicial + $precoInicial/100*$percentual;
}
if(isset($_GET['percentual'])){
    $precoInicial = $_GET["precoInicial"];
    $percentual = $_GET["percentual"];
    $precoFinal = ajuste($precoInicial,$percentual);
    ajusteDireto($precoInicial, $percentual);
    echo "<div class='container text-center mt-5 mb-3 p-0'>
    <h1 class='display-6 bg-dark ml-5 mb-2 rounded text-white'>Preço ajustado</h1>
    </div>";
    echo "<p class='text-center'>Nesse site foram utilizadas funções com <b>passagem de referência</b> e com <b>passagem por valor</b> </p>";
    echo "<b>Preço ajustado por referência:</b> R$".round($precoInicial, 2);
    echo "<b><br>Preço ajustado por valor:</b> R$".round($precoFinal, 2);
}
?>
</div>