<?php

class Session{
    private $nbvisite;
    public function __construct(){
        session_start();
        if (!isset($_SESSION['nbvisite'])) {
            $_SESSION['nbvisite'] = 0;
        }
        $this->nbvisite = $_SESSION['nbvisite']; 
    }
    public function destroy(){
        session_unset();  
        session_destroy(); 
        session_start();  
        $_SESSION['nbvisite'] = 0; 
    }
    public function updatevisits() {
       if (isset($_SESSION['nbvisite'])) {
       $this->nbvisite++;
    $_SESSION['nbvisite']=$this->nbvisite;
} else {
    $_SESSION['nbvisite'] = 0;
    $this->nbvisite=1;
}
    }
    public function showSessions(){
        return $this->nbvisite;
    }
}
?>