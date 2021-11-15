<?php
// Connexion à la base de données
try {
        $bd = new PDO(
                'mysql:host=db5002510161.hosting-data.io;dbname=dbs1996872;charset=utf8',
                'dbu1424581',
                'gnBZN9eXRk4q@sQ',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
} catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}
