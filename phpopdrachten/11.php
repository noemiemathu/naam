<?php
$directory = "img/back/";
$files = scandir($directory);

foreach ($files as $file) {
    if (is_file($directory . $file)) {
        $link = '11.php?file=' . urlencode($directory . $file);
        echo '<a href="' . $link . '"><img src="' . $link . '" alt="' . $file . '"></a><br>';
    }
}

/**
 * wat een gesprekken
 * ja dat ze zo lang kunnen praten over zonnebrand
 * ook nog eens vet harddddd
 * amazing
 */
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    // Controleer of het bestand zich in de "img/back/" directory bevindt om veiligheidsredenen
    if (strpos($file, 'img/back/') === 0) {
        // Toon de afbeelding in een <img> element
        echo '<img src="' . $file . '" alt="Afbeelding">';
    } else {
        echo 'Ongeldige bestandslocatie.';
    }
} else {
    echo 'Geen bestand opgegeven.';
}
