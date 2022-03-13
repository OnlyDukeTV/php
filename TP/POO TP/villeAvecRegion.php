<?php
class VilleAvecRegion extends Ville {
    private $region;

    function __construct($nom, $departement, $region)
    {
        parent::__construct($nom, $departement);
        $this->region = $region;

    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    function afficher()
    {
        return parent::afficher()." de la région ".$this->region;

    }
}
