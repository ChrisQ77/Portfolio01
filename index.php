<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

    <header>

        <a href="index.php"><img src="/images/cq2.png" alt="logo"></a>
        <nav>
            <a href="" class="lienidentique">Compétences</a>
            <a href="" class="lienidentique">Réalisations</a>
            <a href="#section_contact" class="connexion">Contact</a>
        </nav>
        <div class="burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </header>
    

  <?php 

  include 'includes/container.php' 
  
//   include si on ajoute plusieurs fois un element

//  include_once si on doit ajouter une seul fois un élement (footer,nav)

  ?>




<?php 

//   JE VEUX LA LISTE DES REALISATIONS
//   ON SE CONNECTE A LA BASE

require_once 'includes/connect.php';

// J ECRIS LA REQUETE SQL QUI SELECTIONNE  MA TABLE REALISATIONS
$sql = 'SELECT * FROM `realisations`;'; //(TESTER LA REQUETE DANS PHPMYADMIN)

// J EXECUTE LA REQUETE 
$requete = $db->query($sql);


// JE RECUPERE LES DONNEES
$articles = $requete->fetchAll(PDO::FETCH_ASSOC);


?>
   

    
    <section id="section_contact">

        <form action="">
            <h1>Me contacter</h1>
    
            <!-- <label for="">Nom</label> -->
            <input type="email" name="" id="" placeholder="Nom">
    
            <!-- <label for="">Adresse mail</label> -->
            <input type="email" name="" id="" placeholder="Adresse mail">

            <!-- <label for="">Sujet</label> -->
            <input type="text" name="" id="" placeholder="Sujet">

            <!-- <label for="">Message</label> -->
            <textarea name="" id="" cols="10" rows="5" placeholder="Message"></textarea>
    
            <button>Envoyer</button>
        </form>

    </section>

    <footer>
        <span class="span_footer">&copy Christopher Quesnot</span>
    </footer>

</body>
</html>