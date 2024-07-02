<?php 
include_once __DIR__ . "/Models/Movie.php";

$terminator = new movie("Terminator", "Terminator", "01-01-2000", "4", false);
$avengers = new movie("Avengers","Avengers endgame", "20-04-2019","5",["Azione", "avventura"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <div class="card-list">
            <div class="card">
                <h1><?php echo $terminator->titolo_originale ;?></h1>
                <ul>
                    <li>Data uscita: <?php echo $terminator->data_uscita;?></li>
                    <li>Stelle: <?php echo $terminator->stelle;?></li>
                    <li>Generi: <?php echo $terminator->getGeneri();?></li>
                </ul>
            </div>
            <div class="card">
                <h1><?php echo $avengers->titolo_originale ;?></h1>
                <ul>
                    <li>Data uscita: <?php echo $avengers->data_uscita;?></li>
                    <li>Stelle: <?php echo $avengers->stelle;?></li>
                    <li>Generi: <?php foreach ($avengers->getGeneri() as $key => $value) { ?>
                        <span><?php echo $value; ?> /</span>
                    <?php } ?></li>
                </ul>
            </div>

        </div>
    </main>
</body>
</html>