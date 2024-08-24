<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="UTF-8">

  <title>PHP - Variáveis</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap início -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Bootstrap fim -->

  <!-- Estilo Customizado - CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Babel Transpile -->
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

  
  <!-- Javascript -->
  <script type="text/babel" src="script.js"></script>
  
  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


      

</head>

<body>
  
  <!-- Script PHP -->
  <?php include 'script.php'; ?>

  <h1>Ficha cadastral</h1>

  <br>

  <p>Nome: <?= $nome ?></p>
  <p>Idade: <?= $idade ?></p>
  <p>Peso: <?= $peso ?></p>
  <p>Fumante: <?= $fumante_sn ?></p>






















</body>	
</html>