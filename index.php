<?php
include 'includes/crud.php';
include 'includes/controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passionfroid : Gestion d'images</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
    <link rel="stylesheet" type="text/css" href="css/amsify.suggestags.css">
    <script src="https://kit.fontawesome.com/886bfe691e.js" crossorigin="anonymous"></script>
</head>

<header class="bg-dark p-0">
    <div class="row" aria-labelledby="dropdownMenu2">
        <h1 class="text-uppercase text-white text-center col-md-12 my-4">Gestion des images</h1>
    </div>
    <div class="bg-primary" style="bottom:1; height:10px; padding:0;"></div>
</header>

<body style="padding-bottom: 100px;">
    <div class="row">
        <div class="col-md-6 mt-4 mx-auto">
            <input type="text" class="form-control" name="tags" placeholder="Recherche de tags">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php 
            $images = db_get('images');
            $array_images = [];
            foreach($images as $image){
                echo parse('vues/images-small.html', $image);
                $array_images['img_' . $image['id']] = $image;
            }
            ?>
        </div>
    </div>
</body>

<footer>
    <div class="text-center bg-dark text-white py-4 fixed-bottom">
        <p>Copyright Passionfroid 2021</p>
    </div>
</footer>

<?php
include 'modals.php';
?>
<script>
    var imgs = <?php echo json_encode($array_images);?>;
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/jquery.amsify.suggestags.js"></script>
<script src="js/main.js"></script>
</html>