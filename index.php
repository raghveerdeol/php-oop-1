<?php 
include_once __DIR__ . "/Models/Movie.php";

$terminetor = new movie("terminetor", "terminetor", "01-01-2000", "4", "Usa");
// $terminetor->titolo="terminetor";
// $terminetor->stelle=5;
var_dump($terminetor)
?>