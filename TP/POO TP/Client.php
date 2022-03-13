<?php
class Client extends Personne {
    private $adresse;

    function __construct($nom, $prenom, $adresse)
    {
        parent::__construct($nom, $prenom);
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    function setCoord(){

    }

    public function __toString()
    {
        return $this->getNom()." ".$this->getPrenom()." habite au ".$this->getAdresse();
    }

}

