<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>
    <form action="resultado.php" method="post">

    <h1>Formulário</h1>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite o primeiro número</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite o segundo número</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num2">
  </div>

  <button type="submit" class="btn" style="background-color: #e582c4;" value="">Calcular</button>
  
</form>
</body>
</html>

