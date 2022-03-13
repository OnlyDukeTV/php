<?php
    class Personne
    {
        private $prenom;
        private $nom;
        private $age;
        public static $i=0;

         function __construct($prenom,$nom, $age)
        {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
            Personne::$i++;
        }
        function getFullName(){
             return $this->prenom." ".$this->nom;
        }

        //******************************************************
        // GETTERS / SETTERS
        /**
         * @return mixed
         */
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * @param mixed $prenom
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        /**
         * @return mixed
         */
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * @param mixed $nom
         */
        public function setNom($nom)
        {
            $this->nom = $nom;
        }

    }
