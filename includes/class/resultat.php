<?php
include ("includes/requetes.php");

class Resultat {
    private $_pseudo;
    private $_scoreEasy;
    private $_scoreMedium;
    private $_scoreHard;
    private $_scoreTotal;
    
    public function __construct($pseudo){
        $res = getResultat($pseudo);
        while ($data = $res->fetch()) { 
            $this->_pseudo = $data->pseudo_user;
            $this->_scoreEasy = $data->score_easy;
            $this->_scoreMedium = $data->score_medium;
            $this->_scoreHard = $data->score_hard;
            $this->_scoreTotal = $data->score_total;
        }

    }

    public function get_scoreEasy(){
        return $this->_scoreEasy;
    }

    public function get_scoreMedium(){
        return $this->_scoreMedium;
    }

    public function get_scoreHard(){
        return $this->_scoreHard;
    }

    public function get_scoreTotal(){
        return $this->_scoreTotal;
    }
}
?>