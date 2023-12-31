<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="style.css" rel ="stylesheet">   
    <title>Document</title>
</head>
<body>
 
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src = "images/automobile_logo.png" style width = "150" alt ="un garage plus proche de vous">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
       <li><a href="ecfgarage.php" class="btn btn-primary me-2">Accueil</a></li>
        
        <li><a href="aproposde.php" class="btn btn-primary me-2">A Propos</a></li>

        <li><a href="contact.php" class="btn btn-primary me-2">Contact</a></li>
        <li><a href="actualites.php" class="btn btn-primary me-2">Voitures</a></li>
        <li><a href="temoignages.php" class="btn btn-primary me-2">Témoignages</a></li>
      </ul>

      <div class="col-md-3 text-end">
      <?php if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                <?php } else { ?>
        <a href = 'login.php'class="btn btn-outline-primary me-2">Connection</a>
        <a href = 'inscription.php' class="btn btn-primary">S'inscrire</a>
        <?php } ?>
      </div>
    </header>
    <main>