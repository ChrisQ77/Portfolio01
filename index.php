<?php

if (!empty($_POST)){
    if(
        isset($_POST["name"], $_POST["email"], $_POST["sujet"], $_POST["message"])
        && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["sujet"]) && !empty($_POST["sujet"])
    ){

        $titre = strip_tags($_POST["name"], $_POST["email"], $_POST["sujet"], $_POST["message"]);
       

    }else{
        die("Le formulaire est incomplet");
    }
}?>


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
            <a href="#section_competences" class="lienidentique">Compétences</a>
            <a href="#section_realisations" class="lienidentique">Réalisations</a>
            <a href="#section_contact" class="connexion">Contact</a>
        </nav>
        <div class="burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </header>

    <section id="principal">
        <div class="container_section_principal">

        <h1>Christopher Quesnot</h1>
        <h2>Webdesigner</h2>
        

        </div>
       
    </section>

    <section id="section_competences">

    <div class="container_title_competence">
    <h1>Mes compétences</h1>
    </div>
    

    <div class="container_competences">


    <div class="card_competences">
    </div>
    <div class="card_competences">
    </div>
    <div class="card_competences"></div>
    <div class="card_competences"></div>
    <div class="card_competences"></div>
    <div class="card_competences"></div>

    </div>

    

    </section>

    <section id="section_realisations">

    </section>
    
    
    <section id="section_contact">

    

        <form action="" method="$_POST">
        <h1>Me contacter</h1>

            <!-- <label for="">Nom</label> -->
            <input type="text" name="name" id="name" placeholder="Nom">

            <!-- <label for="">Adresse mail</label> -->
            <input type="email" name="email" id="email" placeholder="Adresse mail">

            <!-- <label for="">Sujet</label> -->
            <input type="text" name="sujet" id="sujet" placeholder="Sujet">

            <!-- <label for="">Message</label> -->
            <textarea name="message" id="message" cols="10" rows="5" placeholder="Message"></textarea>

            <button type="submit">Envoyer</button>
        </form>

    </section>

    <footer>
        
       <span class="span_footer">&copy portfolio Christopher Quesnot</span>
       
    </footer>

</body>

</html>