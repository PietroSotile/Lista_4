<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">

<?php
date_default_timezone_set('America/Sao_Paulo');
$hora = localtime(time(),true);
$hora = $hora["tm_hour"];

if($hora<12){
    echo "<div class='container text-center mt-5 mb-5'>
            <h1 class='display-4'>Bom Dia!!!</h1>
            <img class='img-fluid rounded' src='imgs/bom-dia.gif' alt='bomdia'>
        </div>";
}
elseif($hora>=12 and $hora<18){
    echo "<div class='container text-center mt-5 mb-5'>
            <h1 class='display-4'>Boa Tarde!!!</h1>
            <img class='img-fluid rounded' src='imgs/boatardeconsagrado.gif' alt='boa-tarde'>
        </div>";
}
else{
    echo "<div class='container text-center mt-5 mb-5'>
            <h1 class='display-4'>Boa Noite!!!</h1>
            <img class='img-fluid rounded' src='imgs/boa-noite.gif' alt='boa-noite'>
        </div>";
}
?>