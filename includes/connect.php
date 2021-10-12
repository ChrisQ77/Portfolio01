<?php 
// ce fichier se connecte à la base de données
// on définit les informations de connexion dans des constantes
// on utilise define (constante) 
// define('DBHOST', 'localhost'); (ancienne version)
const DBHOST = "localhost";

// DBUSER = Identifiant utilisateur de la base

const DBUSER ='root';

// DBPASS = MOT DE PASSE DE LA BASE DE DONNEES

const DBPASS ='';

// NOM DE LA BASE DE DONNEES (DBNAME)

const DBNAME = 'portfolio';


// NE RIEN MODIFIER CI-DESSOUS !!!
// ON DEFINIT LE DSN (DATA SOURCE NAME) MYSQL

$dsn = 'mysql:dbname' . DBNAME . ';host=' . DBHOST;

// ON TENTE DE SE CONNECTER AU SERVER

// try ( essaye de te connecter), catch (si ça marche pas...)

try {

    // EXECUTE QUOI QU IL ARRIVE
    $db = new PDO($dsn, DBUSER, DBPASS);


}catch(PDOException $e){ //ON ATTRAPE L EXCEPTION PDO

    // EXECUTEE SI LE CODE DANS TRY ECHOUE
    die($e->getMessage());

}

