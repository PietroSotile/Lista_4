<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">

<?php
$imagens = array("azul.png","bomba.png","chuck.png","grande.png", "porco.png","red.png", "verde.png","white.png");
echo "<div class='container text-center mt-5 mb-5'>
            <h1 class='display-4'>Pássaros Raivosos HD</h1>
            <img class='img-fluid w-50 rounded' src='imgs/".$imagens[rand(0,count($imagens)-1)]."' alt='passaro'>
            <br><small>Pressione F5 para mudar de imagem!</small></label>
        </div>";
?>
</div>