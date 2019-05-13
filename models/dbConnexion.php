<?php
    try
    {
        //db connexion
        function getBdd(){
            $bdd = new PDO ('mysql:host=localhost;dbname=ChloeBdd;charset=utf8', 'root', 'root');
            return $bdd;
        }
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
?>