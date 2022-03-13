<?php
class Electeur extends Personne {

    private $bureauDeVote;
    private $vote;

    function __construct($nom, $prenom, $bureauDeVote, $vote)
    {
        parent::__construct($nom, $prenom);
        $this->bureauDeVote = $bureauDeVote;
        $this->vote = $vote;
    }

    /**
     * @return mixed
     */
    public function getBureauDeVote()
    {
        return $this->bureauDeVote;
    }

    /**
     * @param mixed $bureauDeVote
     */
    public function setBureauDeVote($bureauDeVote)
    {
        $this->bureauDeVote = $bureauDeVote;
    }

    /**
     * @return mixed
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @param mixed $vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;
    }

    function aVote(){
        return $this->getNom()." ".$this->getPrenom()." au bureau n°".$this->getBureauDeVote()." a voter ".$this->getVote();
    }
}
