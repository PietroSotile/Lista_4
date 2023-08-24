<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div class="container text-center mt-5 mb-5">
    <h1 class="display-4">Treinamento dos Soldados</h1>
</div>
<div class="container">
    <form class="form-horizontal" action="10.php" method="get">
    <div class="form-group mb-2">
        <label class="select-label col-sm-2" for="direcao">Direção inicial do recruta:</label>
        <div class="col-sm-3">
            <select name="direcao" id="direcao" class="form-select">
                <option value="norte">Norte</option>
                <option value="sul">Sul</option>
                <option value="leste">Leste</option>
                <option value="oeste">Oeste</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label class="control-label col-sm-2" for="comando">Comando do General:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="comando" id="comando" placeholder="Comando do general" onkeyup="somenteED(this)">
                <label class="control-label col-sm text-muted" for="comando"><small>E &#8594; esquerda, volver! D &#8594; direita, volver!</small></label>
            </div>
            <input type="submit" class="btn bg-dark text-white mt-2" value="Comandar"></input>
        </div>
    </form>
</div>

<?php
$direcoes = array(
    0=>array(
        "norte"=>array("Norte", "Leste", "Sul", "Oeste"),
        "leste"=>array("Leste", "Sul", "Oeste", "Norte"),
        "sul"=>array("Sul", "Oeste", "Norte", "Leste"),
        "oeste"=>array("Oeste", "Norte", "Leste", "Sul")
    ),
    1=>array(
        "norte"=>array("Norte", "Oeste", "Sul", "Leste"),
        "leste"=>array("Leste", "Norte", "Oeste", "Sul"),
        "sul"=>array("Sul", "Leste", "Norte", "Oeste"),
        "oeste"=>array("Oeste", "Sul", "Leste", "Norte")
    ),
);

if(isset($_GET['comando'])){
    echo "<div class='container text-center mt-5 mb-3 p-0'>
    <h1 class='display-6 bg-dark ml-5 rounded text-white'>Informações do Soldado</h1>
    </div>";

    $direcao_inicial = $_GET['direcao'];
    $comando = strtoupper($_GET['comando']);
    $esquerda = substr_count($comando,"E");
    $direita = substr_count($comando,"D");
    $movimento = $direita-$esquerda;
    $percorrido = $movimento%4;

    //echo $comando;
    //echo var_dump($direcoes);
    //echo "<br> E = $esquerda D = $direita Movimento = $movimento Percorrido = $percorrido";
    
    echo "<div class='container'><b>Direção inicial:</b> ".ucfirst($direcao_inicial)."<br>";
    echo "<b>Comando do General:</b> ".$comando."<br>";
    echo "<b>Comandos para direita:</b> ".$direita."<br>";
    echo "<b>Comandos para esquerda:</b> ".$esquerda."<br>";

    if($percorrido>=0){
        echo "<b>Direção final:</b> ".$direcoes[0][$direcao_inicial][$percorrido]."<br>";
    }
    else{
        echo "<b>Direção final:</b> ".$direcoes[1][$direcao_inicial][abs($percorrido)]."<br>";
    }

}
echo "</div>";
?>

<script>
    function somenteED(input){
        var regex = /[^edEd]/gi;
        input.value = input.value.replace(regex,"");
    }
</script>