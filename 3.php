<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">
<div class="container text-center mt-5 mb-5">
    <h1 class="display-4">Média do Aluno</h1>
</div>
<div class="container">
    <form class="form-horizontal" action="3.php" method="get">
    <div class="form-group mb-2">
    <label class="select-label col-sm-2" for="nota1">Avaliação 1:</label>
        <div class="col-sm-3">
            <input min="0" step="0.01" required class="form-control" placeholder="Primeira nota" type="number" name="nota1" id="nota1">
        </div>
    <div class="form-group mb-2">
    <label class="select-label col-sm-2" for="nota2">Avaliação 2:</label>
        <div class="col-sm-3">
            <input min="0" step="0.01" required class="form-control" placeholder="Segunda nota" type="number" name="nota2" id="nota2">
        </div>
    <div class="form-group mb-2">
    <label class="select-label col-sm-2" for="nota3">Avaliação 3:</label>
        <div class="col-sm-3">
            <input min="0" step="0.01" required class="form-control" placeholder="Terceira nota" type="number" name="nota3" id="nota3">
        </div>
        <input type="submit" class="btn bg-dark text-white mt-2" value="Calcular Média"></input>
    </div>
    </form>
</div>

<?php
function calcularMedia($nota1, $nota2, $nota3){
    $media = round(($nota1+$nota2+$nota3)/3, 1);
    return $media;
}
if(isset($_GET['nota1'])){
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];
    $media = calcularMedia($nota1,$nota2,$nota3);
    echo "<div class='container text-center mt-5 mb-3 p-0'>
    <h1 class='display-6 bg-dark ml-5 mb-2 rounded text-white'>Média do Aluno</h1>
    </div>";
    echo "<div class='container text-center'><b>Avaliação 1: </b> ".$nota1;
    echo "<b><br>Avaliação 2: </b> ".$nota2;
    echo "<b><br>Avaliação 3: </b> ".$nota3;
    echo "<b><br>Média:</b> ".$media;
}
?>
</div>