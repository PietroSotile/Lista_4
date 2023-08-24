<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">
<div class="container text-center mt-5 mb-5">
    <h1 class="display-4">Tênis-Polar</h1>
</div>

<div class="container">
    <form class="form-horizontal" action="11.php" method="get">
    <div class="form-group mb-2">
        <label class="control-label col-sm-2" for="palavra">Palavra:</label>
            <div class="col-sm-3">
                <input required class="form-control" placeholder="Palavra a ser codificada em polar-tênis" type="text" name="palavra" id="palavra">
            </div>
            <input type="submit" class="btn bg-dark text-white mt-2" value="Codificar"></input>
        </div>
    </form>
</div>

<?php
if(isset($_GET['palavra'])){
    $palavra = $_GET["palavra"];
    $palavraCod = "";
    $letras = str_split($palavra);
    $polar = array("p","o","l","a","r");
    $tenis = array("t","e","n","i","s");
    foreach($letras as $letra){
        $letra_original = $letra;
        $letra = str_ireplace($tenis,$polar,$letra);
        if($letra === $letra_original){
            $letra = str_ireplace($polar,$tenis,$letra);
        }
        $palavraCod = $palavraCod.$letra;
    }
    echo "<div class='container text-center mt-5 mb-5'>
            <p class='display-6'>Palavra original: ".$palavra."</p>
            <h1 class='display-5 bg-dark ml-5 mb-2 rounded text-white'> Palavra codificada: <b>".ucfirst($palavraCod)."</b></h1>
        </div>";
}
?>