<?php
include 'modals.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passionfroid : Gestion d'images</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
</head>

<header class="bg-dark py-4">
    <div class="row" aria-labelledby="dropdownMenu2">
        <button class="col-md-4 btn text-primary" href="modals.php" data-toggle="modal" data-target="#newimg">Ajouter une image</button>
        <button class="col-md-4 btn text-success" type="button">Editer une image</button>
        <button class="col-md-4 btn text-danger" type="button">Supprimer une image</button>
    </div>
</header>

<body>
    <div class="justify-center m-4">
        <input type="text" class="form-control" placeholder="Recherche d'une image" aria-label="Recherche d'une image">
    </div>
</body>

<footer class="position-absolute bottom-0">
<div class="text-center bg-dark text-white">
    <p>Copyright Passionfroid 2021</p>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</footer>
</html>