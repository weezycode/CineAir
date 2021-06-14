<?php
$titre = "";
$film = "";
$projection = "";

if (isset($_GET['id'])) {
    $titre = $_GET['id'];
} else {
    header('location: index.php');
}


$nameErr = $emailErr = $filmErr = $titreErr = $nombreError = "";
$name = $email = $nombre = $details = $titre_film = $uniqid = "";
$unid = uniqid();
// method post when submited 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // check if empty name and return name error
    if (empty($_POST["nom"]) && strlen($_POST['nom'] < 1)) {
        $nameErr = "Veuillez insérer un prénom";
        // check if name only contains letters 
    } elseif (!preg_match("/^[a-zA-Z-']*$/", $_POST['nom'])) {
        $nameErr = "Veuillez insérer que des lettres sans espace";
    } else {
        //if insert name (a-z) add variable
        $name = format_input($_POST["nom"]);
    }

    // check if empty e-mail and return email error and 
    // check if e-mail address is well-formed
    if (empty($_POST["email"]) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Veuillez entrer un email";
    } else {
        $email = format_input($_POST["email"]);
    }
    // check if empty number and isn't numeric return number error
    if (empty($_POST["nombre"]) && !is_numeric($_POST["nombre"])) {
        $nombreError = "Veuillez séléctionner le nombre de personne";
    } else if ($_POST['nombre'] > 5) {
        $nombreError = "Maximun 5 personnes par réservation !";
    } else {
        $nombre = format_input($_POST["nombre"]);
    }
    // check if empty details and titre return  error ( on ne sait jamais il y'a des petits malin ;)_____ )
    if (empty($_POST["details"]) && empty($_POST['titre']) && $_GET['id'] != $_POST['titre']) {
        $filmErr = "Veuillez ne pas modifier";
    } else {
        $details = format_input($_POST["details"]);
        $titre_film = format_input($_POST['titre']);
        $uniqid = format_input($unid);
    }
    if (!$nameErr) {
        $insert = $bd->prepare('INSERT INTO reservation(nom,email,titre,nombre,details,num_reservation)
      VALUES (?,?,?,?,?,?)');
        $insert->execute(array($name, $email, $titre, $nombre, $details, $uniqid));

        if ($insert) {
            header('Location: index.php?id=' . $uniqid);
        }
    }
}

function format_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($titre == "Shang Ghi") {
    $film = '<img class="card-img-top" src="dist/img/image1.jpg" alt="Card image">';
    $projection = "Projection le 5 Août";
}
if ($titre == "Black Widow") {
    $film = '<img class="card-img-top" src="dist/img/img2.jpg" alt="Card image">';
    $projection = "Projection le 6 Août";
}
if ($titre == "Les Tuches") {
    $film = '<img class="card-img-top" src="dist/img/img3.jpg" alt="Card image">';
    $projection = "Projection le 7 Août";
}
if ($titre == "Iron Man") {
    $film = '<img class="card-img-top" src="dist/img/img4.jpg" alt="Card image">';
    $projection = "Projection le 8 Août";
}
