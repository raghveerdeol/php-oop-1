<?php 
class movie {
    // variabili d'istanza 
    public $titolo;
    public $titolo_originale;
    public $data_uscita;
    public $stelle;
    public $genere;

    // costrutore 
    public function __construct($_titolo, $_titolo_originale, $_data_uscita, $_stelle, $_genere){
        $this->titolo = $_titolo;
        $this->titolo_originale = $_titolo_originale;
        $this->data_uscita = $_data_uscita;
        $this->stelle = $_stelle;
        $this->genere = $_genere;
    }
    // metodi 
    public function getGenere(){
        if ($this->genere === false) {
            return "genere non definito";
        } else {
            return $this->genere;
        }
    }
}
?>