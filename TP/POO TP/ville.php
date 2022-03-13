<?php
class Ville{
    private $nom;
    private $departement;


    function __construct($nom,$departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
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

    /**
     * @return mixed
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    public function afficher()
    {

       return "la ville ".$this->nom." est dans le departement ".$this->departement;

    }
}
