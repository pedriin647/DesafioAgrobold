<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>
        Edit
    </title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/DesafioAgrobold">AGROBOLD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="/DesafioAgrobold">Home</a>
      </div>
    </div>
  </div>
</nav>


<div class="container-md mt-5">
    <h2>Editar Cliente</h2>
    <hr>

    <form action="update" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID:</label>
                <input type="text" class="form-control" id="name" value="<?php echo $client["id"] ?>" name="id" readonly>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome Completo:</label>
                <input type="text" class="form-control" id="name" value="<?php echo $client["nomeCliente"] ?>" name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Endereço de e-mail:</label>
                <input type="email" class="form-control" id="email" value="<?php echo $client["emailCliente"] ?>" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Informe sua senha:</label>
                <input type="password" class="form-control" value="<?php echo $client["passwdCliente"] ?>" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Alterar registro</button>
            </form>
</div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>