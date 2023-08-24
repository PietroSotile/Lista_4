<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container text-center mt-5">
<div class="container text-center mt-5 mb-5">
    <h1 class="display-4">Número ao quadrado</h1>
</div>
<form action="1.php" method="get">
    <label for="numero">Número a ser elevado ao quadrado:</label>
    <input type="number" name="numero" id="numero">
    <input type="submit">
</form>
<?php
function quadrado($base){
    $quadrado = pow($base,2);
    return $quadrado;
}
if(isset($_GET['numero'])){
    $base = $_GET["numero"];
    echo "$base&#178 = ".quadrado($base);
}
?>
</div>