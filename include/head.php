<?php

if (isset($_GET['id'])) {
    $uniqid = $_GET['id'];
    $reqid = $bd->prepare('SELECT * FROM reservation
     WHERE num_reservation = ? ');
    $reqid->execute(array($uniqid));
    $idxist = $reqid->rowCount();

    if ($idxist == 1) {
        $userinfo = $reqid->fetch();
        $id = $userinfo['num_reservation'];
        $film = $userinfo['details'];
        $titre = $userinfo['titre'];
        $nombre = $userinfo['nombre'];
    }
}
?>
<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
    <style>
        .error {
            color: #7a1111;
        }
    </style>

    <title>Cinéma plein air</title>
</head>

<body>