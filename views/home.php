<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
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
        <a class="nav-link active" aria-current="page" href="/DesafioAgrobold">Home</a>
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar Cliente</a>
      </div>
    </div>
  </div>
</nav>


<div class="container-md mt-5">
  
    <h2>Controle de Clientes</h2>
    <hr>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success m-2 btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Novo Cliente
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar novo cliente:</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="create" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome Completo:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Endereço de e-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Informe sua senha:</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>

    <div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome: </th>
      <th scope="col">Email: </th>
      <th scope="col">Ações:</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($clients as $item) { ?>
      <tr>
      <th scope="row"><?php echo $item['id']; ?></th>
      <td><?php echo $item['nomeCliente']; ?></td>
      <td><?php echo $item['emailCliente']; ?></td>
      <td>
        <div class="btn-group " role="group">
        <a href="<?php echo "edit/".$item['id']; ?>" type="button" class="btn btn-primary m-1">Editar</a>
        <a href="<?php echo "destroy/".$item['id']; ?>" type="button" class="btn btn-danger m-1">Excluir</a>

        </div>
      </td>
      </tr>


    <?php } ?>




  </tbody>
  </table>
    </div>

  
</div>




    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>