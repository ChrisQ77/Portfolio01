<?php   

// http://portfolio01.test/article.php?id=2

// récuperer une info de l'url

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

// ON VERIFIE SI L ID N EXISTE PAS OU EST VIDE


// if (!isset($_GET['id'])){

//     die("l'id n'existe pas");
// }

// if(empty($_GET['id'])){
//     die("l'id est vide");
// }


// $id = $_GET['id'];




// echo "page de l'article $id";
// ON VERIFIE SI L ID EST NUMERIQUE (entier)


// if(!is_numeric($id)){

//     die("l'id est incorrect");
    
// };

// ON SE CONNECTE A LA BASE

// require_once 'includes/connect.php';

// ON ECRIT LA REQUETE
// ON NE MET JAMAIS UNE DONNEE EXTERIEURE ($id) DIRECTEMENT DANS LA REQUETE

// $sql = "SELECT * FROM `articles` WHERE `id` = :id;";

// UNE REQUETE CONTENANT DES PARAMETRES SQL DOIT ETRE PREPAREE

// $requete = $db->prepare($sql);

// ON INJECTE LES DONNEES

// $requete->bindValue(':id', $id, pdo::PARAM_INT);

// ON EXECUTE LA REQUETE

// $requete->execute();
// $article = $requete->fetch();

// ON S ARRETE SI AUCUN ARTICLE N EST TROUVE

// if (!$article){
//     http_response_code(404);
//     die("l'article n'existe pas");
// }