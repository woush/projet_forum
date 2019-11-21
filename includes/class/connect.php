<?php

class Connect {
    private $_connexion;
    private $_resultat;
    
    public function __construct(){
         try
        {
            $this->_connexion = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
            echo 'Erreur : ' .$e->getMessage().'<br/>';
            echo 'N° : '.$e->getCode();
            die();
        }
    }   

    public function get_connexion(){
        return $this->_connexion;
    }
    
    public function get_resultat(){
        return $this->_resultat;
    }
    
    public function execution($requete){
        $this->_resultat = $this->get_connexion()->query($requete);   
    }
}
?>