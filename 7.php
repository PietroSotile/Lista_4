<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">
<div class="container text-center mt-5 mb-5">
    <h1 class="display-4">Raiz quadrada</h1>
</div>
<div class="container">
    <form class="form-horizontal" action="7.php" method="get">
    <div class="form-group mb-2">
        <label class="select-label col-sm-2" for="valor">Raiz quadrada de:</label>
            <div class="col-sm-3">
                <input min="1" step="0.01" required class="form-control" placeholder="Número para achar raiz quadrada" type="number" name="valor" id="valor">
            </div>
            <input type="submit" class="btn bg-dark text-white mt-2" value="Prosseguir"></input>
        </div>
    </form>
</div>

<?php
function raizQuadrada($valor){
    $chute = (float)1;
    while(!abs($valor-$chute*$chute)<0.0001){
        $chute = 1/2*($chute+$valor/$chute);
    }
    return $chute;
}
if(isset($_GET['valor'])){
    $valor = $_GET["valor"];
    // echo $valor;
    // echo raizQuadrada($valor);
    echo "&#8730 $valor = ".raizQuadrada($valor);
}
?>