<?php
// Connexion à la base de données
try {
        $bd = new PDO(
                'mysql:host=localhost;dbname=cineair;charset=utf8',
                'root',
                '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
} catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}
