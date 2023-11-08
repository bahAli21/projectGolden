<?php
    function getConnexion() {
        $config = array();
        $config = require 'config.php'; // car config.php est un fichier de type fonction car ça retourne un tableau, on sauvegarde donc la valeur retournée dans $config qui est de type array
        $connexion = mysqli_connect($config['host'], $config['user'], $config['password'], $config['db']);
        if(mysqli_connect_errno())
            return "impossible de se connecter";
        return $connexion;
    }