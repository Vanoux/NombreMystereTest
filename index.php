<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php-NombreMystere TDD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<h1>Exo Nombre Mystere</h1>
  <?php
    include('src/Mystere.php');

    $myNb = new Mystere;
    
    echo'<script type="text/javascript">prompt("Entrez un nombre entre 0 et 9 ", "<Entrez ici votre réponse>");</script>';
    echo $myNb->getResult() . '<br>';
    
 ?>

</body>
</html>