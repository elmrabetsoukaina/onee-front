<?php
define("TOKEN_KEY", '_c_OLI/AM');
try {
        $pdo = new PDO('mysql:host=localhost;dbname=' . $onee_bd . ';charset=utf8mb4', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
}
