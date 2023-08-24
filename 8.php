<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container mt-5">
<div class="container text-center mt-5 mb-5">
    <h1 class="display-4">Dados do Formulário</h1>
</div>
<div class="container">
    <form class="form-horizontal" action="8.php" method="get">
    <div class="form-group mb-2">
    <label class="control-label col-sm-2" for="username">Username:</label>
        <div class="col-sm-3">
            <input class="form-control" placeholder="Nome de Usuário" type="text" name="username" id="username">
        </div>
            <label class="control-label col-sm-2" for="senha">Senha:</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
            </div>
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <label class="control-label col-sm-2" for="telefone">Telefone:</label>
            <div class="col-sm-3">
                <input type="tel" id="telefone" name="telefone" placeholder="(dd) xxxxx-xxxx" pattern="\(\d{2}\)\s\d{5}-\d{4}"><br>
                <small>Formato: (dd) xxxxx-xxxx</small>
            </div>
            <input type="submit" class="btn bg-dark text-white mt-2" value="Prosseguir"></input>
        </div>
    </div>
    </form>
</div>
<div class='container mt-5 mb-3 p-0'>
<?php
if(isset($_GET['username'])){
    echo "<div class='container text-center mt-5 mb-3 p-0'>
    <h1 class='display-6 bg-dark ml-5 mb-2 rounded text-white'>Recepção de Informações</h1>
    </div>";
    $username = $_GET["username"];
    if(strlen($username)>45){
        echo "Username: <span class='text-danger'>O nome de usuário inserido é muito extenso.</span>";
    }
    elseif($username == trim($username) && str_contains($username, ' ')){
        echo "Username: <span class='text-danger'>Apenas permitidos letras e números no nome de usuário.</span>";
    }
    else{
        echo "<b>Username:</b> ".$username;
    }

    $senha = $_GET["senha"];
    echo "<b><br>Senha: </b>". $senha;

    $email = $_GET["email"];
    echo "<b><br>Email: </b>". strtolower($email);

    $telefone = $_GET["telefone"];
    $telefoneDD = preg_replace('/[^0-9]/', '', $telefone);  
    echo "<b><br>Telefone: </b>+55".$telefoneDD;

}
?>
</div>