<?php 
include_once __DIR__ . "/Models/Movie.php";

$terminetor = new movie();
$terminetor->titolo="terminetor";
$terminetor->stelle=5;
var_dump($terminetor)
?>