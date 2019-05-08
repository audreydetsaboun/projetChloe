<?php
    class Humain{
        private $nom;

        public function setNom($nouveauNom){
            $this->nom = $nouveauNom;
        }

        public function getNom(){
            return $this->nom;
        }
    }
?>