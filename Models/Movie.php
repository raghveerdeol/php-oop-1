<?php 
class movie {
    // variabili d'istanza 
    public $titolo;
    public $titolo_originale;
    public $data_uscita;
    public $stelle;
    public $generi;

    // costrutore 
    public function __construct($_titolo, $_titolo_originale, $_data_uscita, $_stelle, $_generi){
        $this->titolo = $_titolo;
        $this->titolo_originale = $_titolo_originale;
        $this->data_uscita = $_data_uscita;
        $this->stelle = $_stelle;
        $this->generi = $_generi;
    }
    // metodi 
    public function getGeneri(){
        if ($this->generi === false || $this->generi === "") {
            $errore = ["generi non definito"]; 
            return $errore;
        } else {
            return $this->generi;
        }
    }
}
?>