<?php 
class movie {
    // variabili istanza 
    public $titolo;
    public $titolo_originale;
    public $data_uscita;
    public $stelle;
    public $nazione_di_produzione;

    // costrutore 
    public function __construct($_titolo, $_titolo_originale, $_data_uscita, $_stelle, $_nazione_di_produzione){
        $this->titolo = $_titolo;
        $this->titolo_originale = $_titolo_originale;
        $this->data_uscita = $_data_uscita;
        $this->stelle = $_stelle;
        $this->nazione_di_produzione = $_nazione_di_produzione;
    }
}
?>