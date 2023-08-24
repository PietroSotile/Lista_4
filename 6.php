<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">
    <div class="container text-center mt-5 mb-5">
        <h1 class="display-4">Cassino</h1>
    </div>
</div>
<div class='container mt-5 mb-3 p-0'>
<?php
$roladas= array();
for($i=0;$i<100;$i++){
    $roladas[$i] = rand(1,6);
}
$resultados = array_count_values($roladas);
//var_dump($resultados);
echo "<div class='container text-center mt-5 mb-3 p-0'>
    <h1 class='display-6 bg-dark ml-5 mb-2 rounded text-white'>Ocorrências</h1>
    </div>";
for($j=0;$j<count($resultados);$j++){
echo "<b>Número de vezes na face ".$j+1 .": </b>". $resultados[$j+1]." (".$resultados[$j+1]."%)</br>";
}
?>
</div>
</div>