<?php 
include_once __DIR__ . "/Models/Movie.php";

$terminetor = new movie("Terminetor", "Terminetor", "01-01-2000", "4", false);
$avengers = new movie("Avengers","Avengers endgame", "20-04-2019","5","azione");
// $terminetor->titolo="terminetor";
// $terminetor->stelle=5;
var_dump($terminetor->getGenere() )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <main>
        <div class="card">
            <h1><?php echo $terminetor->titolo_originale ;?></h1>
            <ul>
                <li>Data uscita: <?php echo $terminetor->data_uscita;?></li>
                <li>Stelle: <?php echo $terminetor->stelle;?></li>
                <li>Nazione di produzione: <?php echo $terminetor->getGenere();?></li>
            </ul>
        </div>
        <div class="card">
            <h1><?php echo $avengers->titolo_originale ;?></h1>
            <ul>
                <li>Data uscita: <?php echo $avengers->data_uscita;?></li>
                <li>Stelle: <?php echo $avengers->stelle;?></li>
                <li>Nazione di produzione: <?php echo $avengers->getGenere();?></li>
            </ul>
        </div>
    </main>
</body>
</html>