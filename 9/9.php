<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">
<div class="container text-center mt-5 mb-5">
    <h1 class="display-4">Arquivo log</h1>
    <p class="lead">Cheque a pasta do arquivo para checar o log.txt</p>
</div>

<?php
$data = getdate();
date_default_timezone_set('America/Sao_Paulo');
$arquivo = fopen("log.txt", "a") or exit("Impossível abrir o arquivo!");
fwrite($arquivo, date("Y-m-d")."_".date('H\hi\ms', time())."s\n");
fclose($arquivo);
$arquivo = fopen("log.txt", "r") or exit("Impossível abrir o arquivo!");
echo "<div class='container text-center mt-5 mb-3 p-0'>
    <h1 class='display-6 bg-dark ml-5 mb-2 rounded text-white'>Leitura de log.txt</h1>
    </div><div class='container text-center'>";

while ($line = fgets($arquivo)) {
    echo($line."<br>");
}
fclose($arquivo);

?>