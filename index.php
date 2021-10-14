<!-- POUR REDIRIGER IL FAUT UNIQUEMENT ECRIRE LE PHP EN HAUT AVANT LE HTML -->
<?php
// ON TRAITE LE FORMULAIRE
// ON VERIFIE SI $_POST N EST PAS VIDE
if (!empty($_POST)) {

    // ICI $_POST N EST PAS VIDE
    // ON VERIFIE QUE TOUT LES CHAMPS "OBLIGATOIRES" SONT REMPLIS
    if (
        isset(
            $_POST['name'],
            $_POST['email'],
            $_POST['sujet'],
            $_POST['mess'],
        )
        && !empty($_POST['name'])
        && !empty($_POST['email'])
        && !empty($_POST['sujet'])
        && !empty($_POST['mess'])
    ) {
        // TOUS LES CHAMPS EXISTENT ET NE SONT PAS VIDE
        // ON VERIFIE SI LES CRITERES DE REMPLISSAGE SONT RESPECTES
        // PSEUDO SUPERIEUR A 5 CARACTERES
        // EMAIL = EMAIL
        // MOT DE PASSE SUPERIEUR A 12 CARACTERE
        // ON "NETTOIE" LE CONTENU DES CHAMPS DE TEXTE
        // ON RETIRE TOUTE BALISE HTML OU ON ENCODE LES CARACTERE <,>,/ EN LEURS EQUIVALENTS &lt;, &gt; ...
        $name = strip_tags($_POST['name']);
        $sujet = strip_tags($_POST['sujet']);
        $message = strip_tags($_POST['mess']);

        // ON VERIFIE LA LONGUEUR DU PSEUDO
        if (strlen($name) < 1) {
            die('Entrez votre nom');
        }

        // ICI LE PSEUDO EST CORRECT
        // ON VERIFIE SI L EMAIL EST UN EMAIL
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            die('Email invalide');
        }

        // ON VERIFIE LA LONGUEUR DU MOT DE PASSE
        // if (strlen($_POST['pass']) < 12) {
        //     die('Le mot de passe est trop court');
        // }

        // $pass = password_hash($_POST['pass'], PASSWORD_ARGON2ID);
        // LES DONNES SONT PRETES A ETRE STOCKER
        // ON SE CONNECTE A LA BASE
        require_once 'includes/connect.php';

        // ON ECRIT LA REQUETE
        $sql = "INSERT INTO `baseportfolio`(`name`, `mail`, `sujet`, `message`, `role`) VALUES (:nickname, :email, :sujet, :mess, '[\"ROLE_USERS\"]' );"; //(NOM DES CHAMPS DE LA TABLE ET DANS LE MEME ORDRE ENTRE INSERT INTO ET VALUES)

        // ON PREPARE LA REQUETE 
        $requete = $db->prepare($sql);

        // ON INJECTE LES DONNEES
        $requete -> bindValue(':nickname', $name);
        $requete -> bindValue(':sujet', $sujet);
        $requete -> bindValue(':mess', $message);
        $requete -> bindValue(':email', $_POST['email']);

        // ON EXECUTE LA REQUETE
        $requete->execute();

        // ON REDIRIGE VERS LA PAGE D ACCUEIL
        // header('Location:index.php');
        // exit;

    } else {
        // AU MOINS UN CHAMPS EST INEXISTANT OU VIDE
        die('Il faut tout remplir');
    }
}
?>

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

    

        <form method="$_POST">
        <h1>Me contacter</h1>

            <label for="nickname">Nom</label>
            <input type="text" name="nickname" id="name">

            <label for="email">Adresse mail</label>
            <input type="email" name="email" id="email">

            <label for="sujet">Sujet</label>
            <input type="text" name="sujet" id="sujet">

            <label for="mess">Message</label>
            <textarea name="mess" id="message" cols="10" rows="5"></textarea>

            <button type="submit">Envoyer</button>
        </form>

    </section>

    <!-- <footer>
        
       <span class="span_footer">&copy portfolio Christopher Quesnot</span>
       
    </footer> -->

</body>

</html>