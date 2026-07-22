<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/styele3.css">

</head>

<body>
    <form action="./enviar_produto.php" method="POST">
        <div class="h1">
            <h1>Formulário do Produto</h1>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome do produto:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cadecoria:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="categoria">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quantidade:</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="quantidade">
        </div>
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Preço:</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="preçp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Entrega:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="entrega">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>

</html>