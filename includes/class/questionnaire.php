<?php
 
class Questionnaire {
    private $_questions = array();
    private $_reponse = array();
    private $_photo = array();
    private $_coefAnswer;
    private $_score;
    private $_diff;
    private $_test = array();
    
    public function __construct($questions,$reponses,$photo,$diff){
        $this->_questions = $questions;
        $this->_reponse = $reponses;
        $this->_photo = $photo;

        // set le coef en foncton de la difficulté 
        switch ($diff) {
            case 1:
                $this->_coefAnswer = 1;
                $this->_diff = "Facile";
                break;
            case 2:
                $this->_coefAnswer = 2;
                $this->_diff = "Moyen";
                break;
            case 3:
                $this->_coefAnswer = 4;
                $this->_diff = "Difficile";
                break;
        }

        // set le score à 0 à l'instanciation du formulaire
        $this->_score = 0;

    }

    public function get_question($ind){
        return $this->_questions[$ind];
    }
    
    public function get_reponse($ind){
        return $this->_reponse[$ind];
    }

    public function get_path($ind){
        return $this->_photo[$ind];
    }

    public function get_score(){
        return $this->_score;
    }
    
    public function get_diff(){
        return $this->_diff;
    }

    public function verifAnswer($repUtil,$rep) {
        if ($repUtil == $rep){
            $this->_score += $this->_coefAnswer;
        } 
    }
}
?>