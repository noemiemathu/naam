<?php
/** Opdracht 11 */
$directory = "img/back/";
$files = scandir($directory);

foreach ($files as $file) {
    if (is_file($directory . $file)) {
        $replace = str_replace(['back_', '.png'], '', $file);
        $link = '12.php?file=' . $directory . $file;
        echo '<a href="' . $link . '"><img src="' . $link . '" alt="' . $replace. '"></a><br>';
    }
}
?>
<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    if (strpos($file, 'img/back/') === 0) {
        $replace = str_replace(['back_', '.png'], '', $file);
        echo '<img src="' . $file . '" alt="Image">';
    } else {
        echo 'Ongeldige bestandslocatie.';
    }
} else {
    echo 'Geen bestand opgegeven.';
}
